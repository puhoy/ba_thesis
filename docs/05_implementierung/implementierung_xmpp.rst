XMPP
====

Die Hauptkomponente des Programms stellt die XMPP Komponente dar.
Neben den XMPP bezogenen Funktionen wickelt die Komponente beim starten das heraufsinden der eigenen öffentlichen IP Adressen ab und startet die JSonRPC API (Kapitel TODO) und den BitTorrent Client (Kapitel TODO).

Dieses Kapitel beschreibt den Aufbau der Komponente und der zugehörigen ContactShares-Models, in der die empfangenen Metadaten gehalten werden.


Aufbau der Komponente
---------------------

::

    xmpp/
        __init__.py
        client.py
        share_plugin/
            __init__.py
            address_stanza.py
            resource_stanza.py
            share_item.py
            stanza.py
            user_share.py

der Konstruktor: starten der anderen Komponenten

.. code-block:: python
   :linenos:
   :caption: der Konstruktor: starten der anderen Komponenten
   :name: xmpp-client-init

    class XmppClient(sleekxmpp.ClientXMPP, Subscriber):
        def __init__(self, jid, password, api_host='localhost', api_port=8080):
            Subscriber.__init__(self, autosubscribe=True)
            sleekxmpp.ClientXMPP.__init__(self, jid, password)

            # [...]

            self.addresses = Addresses()
            self.addresses.fetch_addresses()

            logger.info('got addresses: %s' % (self.addresses.ip_v4 + self.addresses.ip_v6))

            self.api = JsonRpcAPI(api_host, api_port)
            self.api.start()

            self.bt_client = BitTorrentClient()
            self.bt_client.start()

            self.addresses.ports.append(self.bt_client.session.listen_port())


der Konstruktor: einbinden den Schedulers und registrieren der Plugins

.. code-block:: python

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

