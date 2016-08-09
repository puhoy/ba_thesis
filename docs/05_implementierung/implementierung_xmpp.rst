XMPP
====

Im vorigen Kapitel BitTorrent wurde die Implementierung eines BitTorrent Clients beschrieben, der eine Liste der zu verteilenden Torrents generiert, und der andererseits die IP Adressen und Ports der zu Downloadenden Torrents benötigt.

Die XMPP Komponente muss nun also diese Liste inklusive der eigenen IP Adressen an alle Kontakte verteilen und außerdem eine Liste der empfangenen Torrents und der entsprechenden Quellen führen.

Das hier verwendete Python Modul sleekxmpp bietet hier die Möglichkeit diese Funktionen in einem Plugin zu implementieren, das in einem ansonsten übersichtlichem XMPP Client geladen werden kann.

Die folgenden Kapitel beschreiben die Stanzas in denen die benötigten Informationen übertragen werden sollen sowie des Aufbau des Plugins.
Danach wird das Einbinden in den XMPP Client erläutert.


Benötigte Stanzas
-----------------

Die benötigten Informationen umfassen mehrere gekapselte Elemente.

Es wird davon ausgegangen, dass ein XMPP Account an mehreren Ressourcen zur gleichen Zeit online ist. Diese wiederum haben sehr wahrscheinlich unterschiedliche IP Adressen, Ports und bieten verschiedene Torrents an.

Daraus ergibt sich folgende Struktur der Daten (hier als Beispiel in Pseudo-XML):

.. code-block:: xml

   <Ressourcen>
      <1. Ressource>

         <Addressen>
            <addresse ip='1.1.1.1' port=11>
            <addresse ip='2.2.2.2' port=22>
         </Addressen>

         <Shares>
            <share hash='123123123' name='beispiel1' size=123>
            <share hash='234234234' name='beispiel2' size=234>
         </Shares>

      </1. Ressource>
      ...
      <n. Ressource>
         <Addressen> ... </Addressen>
         <Shares> ... </Shares>
      </n. Ressource>
   </Ressourcen>


Diese logische Verschachtelung wurde in den folgenden Stanzas abgebildet.

.. figure:: resources/classes_share_stanzas.png
   :align: center
   :alt: Klassendiagramm der benötigten Stanzas

   Klassendiagramm der benötigten Stanzas

Jede Stanzaklasse wurde von ElementBase abgeleitet, der Basisklasse für Stanzas aus SleekXMPP. Mithilfe dieser können die XML Elemente einfach als Klassen und Attribute von Klassen behandelt werden, ohne das XML als String behandelt werden muss.

Das "äußerste" Stanza ist das UserShareStanza. Diesem Container Stanza können über die Methode add_resource Ressourcen, also angemeldete XMPP Clients als Endpunkte, hinzugefügt werden. In diesem ResourceStanza können nun per add_address und add_share AddressStanzas und ShareItems eingebettet werden.


Die Verknüpfung der jeweiligen Stanzas erfolgt dabei aus dem jeweils übergeordnetem Stanza.

.. code-block:: python

   class UserSharesStanza(ElementBase):
       name = 'user_shares'
       namespace = 'https://xmpp.kwoh.de/protocol/shares'
       plugin_attrib = 'user_shares'

       def add_resource(self, resource=''):
           [...]
           resource_stanza = ResourceStanza(None, self)
           resource_stanza['resource'] = resource
           return resource_stanza

Hier wird in der Methode add_resource ein neues ResourceStanza erzeugt.
"ResourceStanza(None, self)" verknüpft das neu erstellte Stanza mit "self", dem UserSharesStanza.

Der Namespace ist hier Erkennungsmerkmal aller zum Plugin gehörigen Stanzas und wird genutzt um eingehende Stanzas dem Plugin zu zu ordnen.

Diese Stanzastruktur wird vom im folgenden Kapitel beschriebenen Plugin benutzt.


Aufbau des Plugins
------------------

Im SleekXMPP Plugin wird nun die beschriebene Datenstruktur benutzt, um die zu verteilenden Daten zu senden bzw. auszulesen.

Jedes SleekXMPP Plugin wird implementiert, indem eine neue Klasse aus der SleexXMPP Klasse BasePlugin abgeleitet wird und in dieser die benötigten Methoden überschrieben werden.


.. figure:: resources/classes_usershares.png
   :align: center
   :alt: Klassendiagramm XMPP Erweiterung

   Klassendiagramm XMPP Erweiterung


Hier wird eine neue Klasse UserShares erstellt und die Methoden plugin_init und plugin_end überschrieben. Diese werden später vom Client beim starten bzw. beenden des Plugins ausgeführt.

Außerdem wurden hier die Methoden publish_shares und stop implementiert.

publish_shares wird aufgerufen sobald der Client startet, außerdem wenn Änderungen an den Torrents oder des BitTorrent Clients stattfinden, beispielsweise falls ein neuer Torrent hinzugefügt wird oder sich der NAT Port ändert.

on_shares_publish hingegen stellt das Gegenstück zu publish_shares dar: diese Methode soll das Empfangen der Daten abwickeln.

Hier soll ein Plugin implementiert werden, das auf dem bereits in den Grundlagen beschriebenen Personal Eventing Protocol (PEP) aufsetzt.

Aufgrund der Funktionalität vom PEP müssen Informationen nur gesendet werden, wenn sich etwas an den zu verteilenden Daten ändert. Der XMPP Server wird selbst dafür sorgen, das Clients die zur Laufzeit erst online gehen die aktuellen Daten bekommen und im Falle von Aktualisierungen alle betreffenden Clients ein Update erhalten.

Dabei muss beachtet werden, das eine Limitierung vom PEP umgangen werden muss: es werden keine multiplen Ressourcen pro Account unterstützt. Da allerdings bei der Anmeldung eine Liste der bisherigen veröffentlichen Daten von Server gesendet wird - auch an den eigenen Account - kann diese Liste einfach erweitert werden um die neue Ressource.


Start des Plugins
-----------------


.. code-block:: python

   def plugin_init(self):
      register_stanza_plugin(
               UserSharesStanza, ResourceStanza, iterable=True)
      register_stanza_plugin(
               ResourceStanza, ShareItemStanza, iterable=True)
      register_stanza_plugin(
               ResourceStanza, AddressStanza, iterable=True)

      self.xmpp['xep_0163'].register_pep('shares', UserSharesStanza)
      self.xmpp.add_event_handler('shares_publish', self.on_shares_publish)

Wird das Plugin vom Client geladen, wird zuerst die plugin_init Methode aufgerufen.
In dieser werden die vom Plugin genutzten Stanzas registriert und das UserShares Stanza unter dem Namen "shares" im PEP Plugin registriert.
Das PEP Plugin wird daraufhin den Namespace des UserShares Stanzas als unterstütztes Feature der Service Discovery hinzufügen. Auf diese Art werden nur solche Clients die Informationen erhalten, die das Plugin unterstützen. Außerdem werden in register_pep die Events "shares_publish" und "shares_retract" angelegt.

Als nächstes wird ein Event Handler für shares_publish registriert. In dieser Methode "on_shares_publish" soll das Empfangen und Einpflegen der Daten erfolgen.


Empfangen von Daten
-------------------

Wird nun ein UserShareStanza empfangen, wird über den Namespace identifiziert dass UserShare Plugin dafür zuständig ist, und die zugehörige Methode on_shares_publish wird mit dem Stanza als erstem Argument aufgerufen.

Diese Informationen werden in einem Objekt der Klasse ContactShares der models gehalten.
Diese dient als Wrapper um ein Python Dictionary und bietet einige von der Datenstruktur abstrahierte Funktionen wie "get_resource(jid, resource)", die für einen bestimmten User die Daten einer bestimmten Ressource liefert.
Außerdem wurden mit threading.Lock Sperren gegen den Zugriff aus mehreren Threads zur gleichen Zeit implementiert.

.. code-block:: python

    @staticmethod
    def on_shares_publish(msg):
        """ handle incoming files """
        incoming_shares = msg['pubsub_event']['items']['item']['user_shares']
        logger.info('%s' % incoming_shares)

        contact_shares.clear(msg['from'])

        for resource in incoming_shares['resources']:
            [...]

            for item in resource['share_items']:
                logger.info('adding share %s to resource %s' % (item['name'], resource['resource']))
                contact_shares.add_share( msg['from'],
                                          resource['resource'],
                                          item['hash'],
                                          item['name'],
                                          item['size'])

            for address in resource['ip_addresses']:
                contact_shares.add_address( msg['from'],
                                            resource['resource'],
                                            address['address'],
                                            address['port'])

        publish('recheck_handles')

In der on_shares_publish Methode werden dann zuerst alle bislang vorhandenen Daten gelöscht, da davon ausgegangen wird, dass in dem erhaltenen Paket alle aktuellen Daten vorhanden sind. Daraufhin wird über die gesendete Liste an Ressourcen iteriert. Jede Ressource sollte "share_items", also Informationen über Torrents, und mindestens eine IP-Adresse mit Port haben.

Wurde das Datenpaket verarbeitet, wird eine Nachricht ohne Argumente auf Topic "recheck_handles" geschickt. Das wiederum hat zur Folge dass im BitTorrent Client über alle eigenen Torrents iteriert und überprüft wird, ob neue Quellen für einen der eigenen Torrents vorliegen.

Auf diese Art können zur Laufzeit neue Quellen zu vorhandenen Torrents hinzugefügt werden.
Außerdem liegt eine durchsuchbare Datenstruktur vor, die beispielsweise von Frontends benutzt werden kann um die empfangenen Torrentlisten anzuzeigen.


Versenden der Daten
-------------------

Das Versenden der Daten wird in der Methode publish_shares abgewickelt.
Diese soll, wenn aufgerufen, eine aktuelle Liste der Torrents, verpackt in die definierten Stanzas versenden.

Hier muss darauf geachtet werden, dass nicht nur eine Liste der aktuellen Torrents gesendet wird. Es müssen außerdem die bereits empfangenen Torrents anderer Ressourcen des Eigenen Accounts mit einbezogen werden.

Dazu wird die Tatsache genutzt, das nach dem senden auch immer eine Liste der eigenen Torrents empfangen wird. Das hat zur Folge, dass in derselben Datenstruktur in der auch die Torrent Daten anderer Nutzer gespeichert werden, die eigenen Daten vorliegen.

Es muss also nurnoch der eigene Useraccount aus der Liste ausgelesen und die Daten der lokalen Ressource aktualisiert werden.

Danach wird die bereits erläuterte Struktur aus Stanzas entsprechend der Daten erstellt und gesendet.



Aufbau des Clients
------------------

.. figure:: resources/classes_xmpp.png
   :align: center
   :alt: Klassendiagramm XMPP

   Klassendiagramm XMPP

Die Klasse XmppClient leitet sich ab aus der Klasse ClientXMPP der Python Bibliothek sleekxmpp, in der jede Grundlegende Funktionalität für einen XMPP Client definiert ist und der Subscriber Klasse aus dem im Kapitel "IPC" beschriebenen Modul pubsub, die für die Möglichkeit der Inter Process Communication sorgt.

Im Konstruktor der XmppClient Klasse (bitween/components/xmpp/client.py) werden einerseits alle XMPP-bezogenen Konfigurationen vorgenommen, aber auch die anderen Komponenten der Anwendung gestartet.


.. code-block:: python
   :linenos:
   :caption: Konstruktor Teil 1: Einbinden des Schedulers und registrieren der Plugins
   :name: xmpp-client-init

        Subscriber.__init__(self, autosubscribe=True)
        sleekxmpp.ClientXMPP.__init__(self, jid, password)

        self.add_event_handler("session_start", self.start)

        self.register_plugin('xep_0030')  # service discovery
        self.register_plugin('xep_0115')  # entity caps
        self.register_plugin('xep_0128')  # service discovery extensions
        self.register_plugin('xep_0163')  # pep

        self.register_plugin('shares', module=share_plugin)
        self.add_event_handler('shares_publish', self.on_shares_publish)

        self.scheduler.add("_schedule", 2, self.process_queue, repeat=True)

        # [...]


Hier wird erst die Basisklasse mit Jabber ID und Passwort initialisiert und die self.start Methode mit dem session_start Event verknüpft.
Danach werden die benötigten XEP Plugins registriert. Diese implementieren die entsprechende Funktionalität des XMPP Protokolls und sind Teil von sleekxmpp.

Das "shares" Plugin wurde als Modul share_plugin implementiert und ist zuständig für das Verteilen der Metadaten der BitTorrent Freigaben und wird im folgenden Kapitel TODO beschrieben.



 und die benötigten Erweiterungen und ein Scheduler zum auslesen des Message Queues registriert.
Die XEP-Plugins



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
self.addresses.fetch_addresses() startet nun den den Prozess, die eigene IPv4 Adresse herauszufinden. Dies geschieht mit Hilfe des Python Paketes "ipgetter". In diesem sind Services gelistet, die die IP Adresse zurück geben, von denen sie kontaktiert wurden. Auf diese Art ist es einfach möglich, auch hinter einem NAT-Router die eigene öffentliche IPv4 zu bestimmen.
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



