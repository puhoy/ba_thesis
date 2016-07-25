XMPP
====

Die Hauptkomponente des Programms stellt die XMPP Komponente dar.
Neben den XMPP bezogenen Funktionen wickelt die Komponente beim starten das herausfinden der eigenen öffentlichen IP Adressen ab und startet die JsonRPC API (Kapitel TODO) und den BitTorrent Client (Kapitel TODO).

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

10-13:
 Registrieren der benötigten Plugins

14:
 Registrieren des Share Plugins
 (TODO: das braucht unbedingt viel mehr erklärung)

.. todo::

    vielleicht ein eigenes Kapitel "starten der Anwendung"


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

Eigene Addressen finden
~~~~~~~~~~~~~~~~~~~~~~~

(Zeile 3 und 4, Zeile 14)
self.addresses ist hier ein neues Objekt der Addresses Klasse die die eigenen IPv4 und v6 Adressen und die Ports enthält, die der BitTorrent Client nutzt.
self.addresses.fetch_addresses() startet nun den den prozess, die eigene IPv4 Adresse herauszufinden. Dies geschieht mit Hilfe des Python Paketes "ipgetter". In diesem sind Services gelistet, die die IP Adresse zurück geben, von denen sie kontaktiert wurden. Auf diese Art ist es einfach möglich, auch hinter einem NAT-Router die eigene öffentliche IPv4 zu bestimmen.
Als zweiten Schritt wird mithilfe des Python Paketes "netifaces" eine Liste der globalen IPv6 Adressen erstellt. Da es hier nicht möglich ist, die Flags für die temporären Adressen auszulesen, werden ganz einfach alle Adressen gelistet. Zu diesem Zeitpunkt existiert bereits ein Pull-Request für das netifaces Git-Repository auf BitBucket, der jedoch nur BSD und Mac-OS unterstützt und noch nicht in dem Hauptentwicklungszweig integriert wurde. :cite:`al45t61:online`

Zum Schluss wird, nach dem starten des BitTorrent Clients (Zeile 14), noch der BitTorrent Port gesetzt.

Starten der Json API
~~~~~~~~~~~~~~~~~~~~

(Zeile 8 und 9)
Als nächstes wird der API Prozess gestartet. Hierzu wird ein neues JsonRpcAPI Objekt erstellt und dessen start-Methode aufgerufen, welche die API in einem neuen Thread startet. Näheres dazu im Kapitel JsonRpcAPI (TODO)


Starten des BitTorrent Clients
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

(Zeile 11 und 12)
Nach der API wird der BitTorrent Client in einem eigenen Prozess gestartet. Da auch diese Klasse von der Thread-Klasse abgeleitet ist, wird der Client mit der start-Methode in einem neuen Thread gestartet. Näheres zu dem Ablauf in Kapitel "Implementierung BitTorrent" (TODO)



Plugins
-------

.. todo::

    was sagt die sleekxmpp doku zu plugins? (da war iwas)


SleekXMPP ist su aufgebaut, dass Funktion in Form von Plugins, die meiste spezifische XEP implementierungen darstellen, erweitert werden kann.

Um die Funktionalität abzubilden, eine Liste mit Hashwerten und zugehörigen Eigenschaften wie Dateiname- und Größe an alle Kontakte des Rosters zu senden, wurde hier auf dem Personal Eventing Protocol (XEP-0163) aufgebaut. (TODO: cite.., erklären)


.. code-block:: Python

        from . import stanza
        from . import UserSharesStanza, ShareItemStanza, ResourceStanza, AddressStanza

        class UserShares(BasePlugin):
            name = 'shares'
            description = 'UserShares'
            dependencies = set(['xep_0163'])
            stanza = stanza

            def plugin_end(self)

            def session_bind(self, jid)

            def _update_own_shares(self, handle_infos, addresses)

            def publish_shares(self, handle_infos=None, addresses=None, options=None,
                               ifrom=None, block=True, callback=None, timeout=None)

            def stop(self, ifrom=None, block=True, callback=None, timeout=None)

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

