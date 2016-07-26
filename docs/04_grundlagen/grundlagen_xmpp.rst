
XMPP
====

Das Extensible Messaging and Presence Protocol ist im Grunde eine Technologie zum XML streamen (vgl. :cite:`XMPPTheDefinitiveGuide:streamingxml`) und kann so benutzt werden um alle möglichen Arten Textbasierter Informationen zu versenden und zu empfangen.

Ein Stream beginnt immer mit dem öffnen eines <stream> Tags und endet mit dem schließenden </stream> Tag.
Innerhalb dieses Streams können eine beliebige Menge an XML Stanzas versendet werden. Die XMPP Core RFC definiert ein Stanza als "discrete semantic unit of structured information that is sent from one entity to another" :cite:`Exten90:online`, also wiederum ein XML Tag in den wiederum auch Tags eingebettet sein können. (TODO: blöder satz)

Für die Tiefe 1 des Streams also unmittelbar dem <stream> Stanza untergeordnet, sind 3 Basis-Stanzatypen definiert, die sich im default-Namespace "jabber:client" bzw. "jabber:server" befinden:

    <message/> <presence/> <iq/>

Jedes dieser Basisstanzas erfüllt unterschiedliche Funktionen.

So ist mit <message> ein "Push" Mechanismus verbunden, um Nachrichten direkt an andere Teilnehmer zu verschicken, Beispielsweise::

    <message to='jan@xmpp.kwoh.de' id='321' type='chat'>
        <body>Ich bin eine Nachricht!</body>
    </message>

Das <presence> Stanza funktioniert als "Publish-Subscribe" Mechanismus.
In der Basisfunktionalität ist dies der Verfügbarkeitsstatus: ist ein Kontakt Online oder nicht. Es wird also jeder Kontakt, der die eigene Presence abonniert hat, automatisch über Statusänderungen benachrichtigt.
Diese ist üblicherweise erweitert durch ein "<show>" und "<status>" Stanza, das eine nähere Beschreibung der Anwesenheit gibt::

    <presence>
        <show>away</show>
        <status>Ein Buch lesen</status>
    </presence>

Um diese Nachrichten zu empfangen, wird eine Presence-Subscription benötigt, also ein Handshake, bei dem die Gegenstelle das "Abonnemont" des Kontakts akzeptiert. Dies wird üblicherweise von den Clients durchgeführt, wenn ein neuer Kontakt zum Roster hinzugefügt werden soll. [1]_

.. [1] Der Handshake überschreitet die für diese Thesis benötigten Grundlagen, deshalb sei an dieser Stelle auf das Buch "XMPP - The definitive Guide" von Peter Saint-Andre, Kevin Smith und Remko Tronçon :cite:`XMPPTheDefinitiveGuide:streamingxml` verwiesen.

Das Presence Stanza wird durch viele XMPP Extension Protocols (XEP) erweitert, insbesondere XEP-0060 ("Publish-Subcribe") und XEP-0163 ("Personal Eventing Protocol"), auf die noch näher eingegangen wird.


Das Info/Query Stanza (IQ) implementiert einen Query-Response Mechanismus und ist vergleichbar mit der HTTP funktionalität.

Ein IQ Stanza kann eins von vier type-Attributen haben:

.. code-block:: none
   :caption: 4 IQ Stanzatypes :cite:`Exten90:online`

    get -- The stanza is a request for information or requirements.
    set -- The stanza provides required data, sets new values, or replaces existing values.
    result -- The stanza is a response to a successful get or set request.
    error -- An error has occurred regarding processing or delivery of a previously-sent get or set (see Stanza Errors).


Zur verdeutlichung wie diese unterschliedlichen Funktionen ineinander greifen, sei dieses Beispiel aus XMPP: The Definitive Guide :cite:`XMPPTheDefinitiveGuide` gegeben.

.. code-block:: xml
   :caption: XML Beispielstream aus :cite:`XMPPTheDefinitiveGuide` (s.17)


    C: <stream:stream>

    C: <presence/>

    C: <iq type="get">
        <query xmlns="jabber:iq:roster"/>
       </iq>

    S: <iq type="result">
         <query xmlns="jabber:iq:roster">
           <item jid="alice@wonderland.lit"/>
           <item jid="madhatter@wonderland.lit"/>
           <item jid="whiterabbit@wonderland.lit"/>
         </query>
       </iq>

    C: <message from="queen@wonderland.lit"
                to="madhatter@wonderland.lit">
         <body>Off with his head!</body>
       </message>

    S: <message from="king@wonderland.lit"
                to="party@conference.wonderland.lit">
         <body>You are all pardoned.</body>
       </message>

    C: <presence type="unavailable"/>

    C: </stream:stream>


Üblicherweise wird sich ein User mit seiner "Jabber ID" (JID) anmelden.
Diese besteht aus dem Accountnamen, der Serveradresse und einer Resource, die die jeweiligen Endpunkte unterscheidet, im Format "username@serveraddresse/resource". die Kombination aus Accountname und Serveraddresse wird "bare" JID genannt, kommt die Ressource hinzu, spricht man von der "full" JID.


Erweiterungen
-------------

 'The “X” in XML and XMPP stands for “extensible,” so payload types are limited only by your imagination!' :cite:`XMPPTheDefinitiveGuide`

Dadurch, dass XMPP auf der Extensible Markup Language aufbaut kann es relativ leicht um eigene Funktionen erweitert werden. Die XMPP Standards Foundation führt hierzu eine Liste der eingereichten Erweiterungen als XMPP Extension Protocols (XEP). Diese Umfassen zu diesem Zeitpunkt 379 Dokumente.


Als Möglichkeit, mit wenig Aufwand definierte Informationen an die eigenen Kontakte zu senden, soll hier eine Einführung in das Personal Eventing Protocol (XEP-0163), bzw. eine seiner Anwendungen, das auf PEP aufbauende "User Tune" (XEP-0118) gegeben werden.


PEP / User Tune
...............

 "Instead of extending <presence> stanzas directly, it is a best practice to make use of the Personal Eventing Protocol, or PEP, defined in XEP-0163, which allows users to subscribe to the extra data they are interested in. The PEP extension, along with Entity Capabilities (XEP-0114) and Service Discovery (XEP-0015), make providing extended presence-type information efficient and opt-in." :cite:`professionalxmpp:pep`


Mit dem Personal Eventing Protocol existiert eine gute Möglichkeit, Nutzerbezogene Informationen zu teilen. Hier wird jedem Nutzeraccount eine PubSub Node zugeordnet, auf der er Informationen in die jeweiligen Namespaces publishen kann.

Mithilfe von Entity Capabilities (XEP-0115) :cite:`XEP-0115:online` kann ein Kontakt dem Server mitteilen, welche Namespaces er unterstützt (PEP spricht hier von "interest"), und wird daraufhin nach diesen Namespaces gefilterte Listen mit Userinformationen bekommen. Außerdem wird der Server falls nötig Updates ausliefern.

Eine zweite Möglichkeit, PEP Nachrichten zu erhalten ist das "auto-subscribe" Feature, bei dem die gesamte Presence eines Users abonniert wird. In diesem Fall bekommt der Client immer alle Nodes, es wird nicht gefiltert.


Bereits in vielen Clients umgesetzt sind die auf PEP basierenden Erweiterungen "User Geolocation" (XEP-0080), "User Mood" (XEP-0107), "User Activity" (XEP-0108) und "User Tune" (XEP-0118). All diese XEPs sind darauf ausgelegt, Informationen die sich auf den aktuellen Useraccount beziehen, an interessierte Kontakte auszuliefern.


Ein übersichtliches Beispiel zur Anwendung von PEP ist in der User Tune Spezifikation gegeben.

.. code-block:: xml
   :caption: Beispiel: Publishing an event xep-0118 :cite:`XEP-0118:online`
   :linenos:

    <iq type='set'
        from='stpeter@jabber.org/14793c64-0f94-11dc-9430-000bcd821bfb'
        id='tunes123'>
      <pubsub xmlns='http://jabber.org/protocol/pubsub'>
        <publish node='http://jabber.org/protocol/tune'>
          <item>
            <tune xmlns='http://jabber.org/protocol/tune'>
              <artist>Yes</artist>
              <length>686</length>
              <rating>8</rating>
              <source>Yessongs</source>
              <title>Heart of the Sunrise</title>
              <track>3</track>
              <uri>http://www.yesworld.com/lyrics/Fragile.html#9</uri>
            </tune>
          </item>
        </publish>
      </pubsub>
    </iq>

Hier sendet User 'stpeter@jabber.org' vom Endpunkt '14793c64-[...]' ein PEP Event Stanza auf die Node 'http://jabber.org/protocol/tune', was dem Namespace des eingebetteten Stanza "tune" entspricht und keine aufrufbare URL, sondern nur ein Name für Namespace und Node ist.

Daraufhin werden alle User in seiner Kontaktliste, die die Presence oder den Namespace abonniert haben, das aktuelle pubsub Stanza bekommen.


Im Kapitel Implementierung/XMPP wird beschrieben, wie eine eigene PEP Erweiterung die für BitTorrent benötigten Informationen einbetten kann.
