XMPP
====

Die Hauptkomponente des Programms stellt die XMPP Komponente dar.
Neben den XMPP bezogenen Funktionen wickelt die Komponente beim starten das heraufsinden der eigenen öffentlichen IP Adressen ab und startet die JsonRPC API (Kapitel TODO) und den BitTorrent Client (Kapitel TODO).

Außerdem wurde ein Plugin implementiert, das auf Basis der XMPP Erweiterung PEP :cite:`XEP-0163:online` Freigabelisten versendet und empfängt.

Das folgende Kapitel beschreibt den Aufbau der Komponente. Im Kapitel "PEP Plugin" wird die Imlementierung des Plugins  und des zugehörigen ContactShares-Models besprochen, in dem die empfangenen Freigabelisten gehalten werden.


Aufbau der Komponente
---------------------

.. code-block:: none
   :caption: Übersicht Aufbau des XMPP Moduls

    xmpp/
        __init__.py
        client.py
        share_plugin/
            [...]


Da im Konstruktor einerseits alles XMPP-bezogene eingerichtet eingerichtet wird, andererseits aber auch einige andere Komponenten gestartet werden, wird der code in zwei Beispielen erklärt.


.. code-block:: python
   :linenos:
   :caption: Konstruktor Teil 1: einbinden des Schedulers und registrieren der Plugins
   :name: xmpp-client-init

    class XmppClient(sleekxmpp.ClientXMPP, Subscriber):
        def __init__(self, jid, password, api_host='localhost', api_port=8080):
            Subscriber.__init__(self, autosubscribe=True)
            sleekxmpp.ClientXMPP.__init__(self, jid, password)

            self.add_event_handler("session_start", self.start)
            self.scheduler.add("_schedule", 2, self.process_queue, repeat=True)
            self.add_event_handler('shares_publish', self.on_shares_publish)

            self.register_plugin('xep_0030')  # service discovery
            self.register_plugin('xep_0115')  # entity caps
            self.register_plugin('xep_0128')  # service discovery extensions
            self.register_plugin('xep_0163')  # pep
            self.register_plugin('shares', module=share_plugin)

            # [...]

Der erste Teil des Konstruktors widmet sich dem Setup der Grundfunktionen der Komponente:

1:
 Die Klasse leitet sich ab aus ClientXMPP, der Client Klasse der SleekXMPP Bibliothek und Subscriber, (siehe Kapitel IPC), was dafür sorgt dass die Klasse IPC Nachrichten empfangen kann.

6:
 Hinzufügen des "session_start" Eventhandlers. Das "session_start" Event wird aufgerufen beim Aufruf der connect() Methode der ClientXMPP Klasse.

7:
 Hinzufügen eines Schedulers der die Nachrichtenqueue abfragt. Hier wird alle 2 Sekunden die Methode "process_queue" des XmppClient ausgeführt.
 :cite:`Sched99:online`

8:
 Hinzufügen eines Eventhandlers für das "shares_publish" Event und verknüpfen mit der on_shares_publish Methode.
 (TODO siehe kapitel plugin..?)

10-14:
 Registrieren der benötigten Plugins

15:
 Registrieren des Share Plugins
 (TODO: das braucht unbedingt viel mehr erklärung)


.. code-block:: python
   :linenos:
   :caption: der Konstruktor: starten der anderen Komponenten
   :name: xmpp-client-init

            # [...]

            self.addresses = Addresses()
            self.addresses.fetch_addresses()

            logger.info('got addresses: %s' % (self.addresses.ip_v4 + self.addresses.ip_v6))

            self.api = JsonRpcAPI(api_host, api_port)
            self.api.start()

            self.bt_client = BitTorrentClient()
            self.bt_client.start()

            self.addresses.ports.append(self.bt_client.session.listen_port())


Der zweite Teil des Konstruktors widmet sich dem beschaffen der eigenen öffentlichen IP Adressen und der Initialisierung der weiteren Komponenten der Anwendung.



.. todo::

    sleekxmpp




Plugins
-------

.. todo::

    was sagt die sleekxmpp doku zu plugins? (da war iwas)




SleexXMPP PEP Plugin
--------------------


.. todo::

    kurze wiederholung + verweis auf xmpp
     -> user tune

    erweiterung auf Basis von UserTune
     -> diff zur änderung


problem: sleekxmpp benutzt für pubsub, xep-163, keine extended stanzas (xep-0033, replyto)

 -> wir können nur pro user shares definieren, nicht per resource
    http://xmpp.org/extensions/xep-0163.html#notify-addressing #3

lösung:

wir bekommen auf jedem account unsere eigenen pep nachrichten zugeschickt. wir definieren also eine struktur, die unsere freigaben nach resourcen gliedert, und erweitern gegebenenfalls die liste der ressourcen um ein element, das die freigaben der aktuellen resource enthält.

