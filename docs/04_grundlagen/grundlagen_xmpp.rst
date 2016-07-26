
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

.. code-block:: none
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


Erweiterungen
-------------

 'The “X” in XML and XMPP stands for “extensible,” so payload types are limited only by your imagination!' :cite:`XMPPTheDefinitiveGuide`

Dadurch, dass XMPP auf der Extensible Markup Language aufbaut kann es relativ leicht um eigene Funktionen erweitert werden. Die XMPP Standards Foundation führt hierzu eine Liste der eingereichten Erweiterungen als XMPP Extension Protocols (XEP). Diese Umfassen zu diesem Zeitpunkt 379 Dokumente.

Einige der am häufigsten genutzten Erweiterungen sind Beispielsweise User Avatars (XEP-0084), In-Band Registration (XEP-0077) und Service Discovery (XEP-0030). (TODO: im grunde unnötig, verwirrt nur. oder?)

Als Beispiel, wie mit wenig Aufwand bestimmte Informationen an die eigenen Kontakte gesendet werden können, soll hier eine kurze Einführung in XEP-0118: User Tune, bzw. das zugrunde liegende Personal Eventing Protocol (XEP-0163) gegeben werden.



PEP / User Tune
...............


 "Instead of extending <presence> stanzas directly, it is a best practice to make use of the Personal Eventing Protocol, or PEP, defined in XEP-0163, which allows users to subscribe to the extra data they are interested in. The PEP extension, along with Entity Capabilities (XEP-0114) and Service Discovery (XEP-0015), make providing extended presence-type information efficient and opt-in." :cite:`professionalxmpp:pep`





.. todo::

    service disco, pubsub, entity caps
    pep:
      https://oneminutedistraction.wordpress.com/2010/09/13/difference-between-pubsub-and-pep/

      TL;DR:
        - user postet "interest" in presence (bei der anmeldung)
        - user bekommt alles was an rosterkontakten zu dem interest gepostet wird

      beispiel: user tune (XEP-0118)









.. note::

    The Jabber Software Foundation (JSF) was founded in 2001 to coordinate the efforts around the
    Jabber protocol and its implementations. By late 2002, the JSF had submitted the core protocol specifications
    to the IETF process, and an IETF working group was formed. In October 2004, this standards
    process produced improved versions of the Jabber protocols, renamed XMPP, documented as
    RFCs 3920, 3921, 3922, and 3923.

    During the protocol’s early life, developers continued to expand its possibilities by submitting
    protocol extensions to the JSF. These extensions were called Jabber Extension Proposals (JEPs).

    Eventually the JSF and the extensions followed the naming change from Jabber to XMPP and
    became the XMPP Standards Foundation (XSF) and XMPP Extension Proposals (XEPs).



.. note::

    auch interessant: definitive guide, p 117 ff



