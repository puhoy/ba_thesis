.. 02_einleitung:


Einleitung
~~~~~~~~~~

Das eXtensible Messaging and Presence Protocol (XMPP), umgangssprachlich "Jabber", ist ein offenes
Kommunikationsprotokoll, das im wesentlichen eine Technologie darstellt, in XML eingebettete Daten zu streamen und dass sich seit seiner Veröffentlichung 1999 :cite:`XMPP|91:online` stark verbreitet hat.
Beispielsweise arbeiten der Facebook-Chat, WhatsApp und GoogleTalk mit XMPP. Ausserdem verwenden Apple, Cisco, IBM, Nokia und Sun XMPP in eingigen ihrer Produkte. (Vgl. :cite:`XMPPTheDefinitiveGuide:companys`)


Durch die Möglichkeit, XMPP Server ähnlich wie Email Server in einem dezentralen Netzwerk zu betreiben, ist aber auch ein Netzwerk von vielen öffentlichen, privat betriebenen XMPP Servern gewachsen. Listen einiger öffentlicher Server finden sich beispielsweise unter jabberes.org/servers :cite:`jabberes|Jabbe36:online` oder xmpp.net/directory :cite:`imobs|IMObs44:online`.


Allerdings bringt die Tatsache, dass XMPP auf einem Textbasierten Protokoll aufbaut auch Nachteile mit sich.

So werden im Falle der Übertragungen von Binärdaten diese erst Base64 kodiert, um sie in den XML Stream einzubetten.
Dies vergrößert die Datenmenge auf ca. 4/3 für diese sogenannten In-Band Übertragungen und häufig wird die Übertragungsrate dieser in XML-Datenpakete dann noch von den beteiligten Servern gedrosselt.

Deshalb stellen In-Band Übertragungen in den meisten Fällen nur den Fallback Modus dar, bevorzugt werden Out-of-Band Übertragungen.

Das bedeutet, dass eine separate Client-zu-Client Verbindung hergestellt wird, über die die Datenübertragung stattfinden soll. Da hier aber mehrere Erweiterungen existieren, die wiederum von beteiligten Clients sowie Servern unterstützt werden müssen, schlagen diese Übertragungen häufig fehl, sodass in vielen Fällen die Clients auf In-Band Übertragung zurückfallen oder die Übertragung gar nicht zustande kommt.


Diese Thesis untersucht eine andere Methode, die Dateiübertragungen abzuwickeln: über das Peer-to-Peer Protokoll BitTorrent (BT).

XMPP dient hierbei nur noch dazu, die Daten weiter zu leiten, die für das Starten einer Datenübertragung per BitTorrent nötig sind.
Das Herstellen der Verbindung zwischen den Clients sowie die eigentliche Datenübertragung finden komplett über BitTorrent statt.

Dazu wurde ein XMPP- und BitTorrent Client in Python implementiert, der dazu dient die für den Datenaustausch wichtigen Informationen unter den Teilnehmern zu verteilen und gegebenenfalls die Datenübertragungen abzuwickeln.



.. todo::

    - was ich in welchem Kapitel beschreibe

    "kurze Erörterung der Randbedingungen, die insbesondere darlegt, was vorgegeben und daher "nur" genutzt und was eigenständig entwickelt wurde. Außerdem soll in der Einleitung der weitere Aufbau der Arbeit beschrieben werden"


