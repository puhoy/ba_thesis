.. einleitung:

Einleitung
----------

Das eXtensible Messaging and Presence Protocol (XMPP), umgangssprachlich "Jabber", ist ein offenes
Kommunikationsprotokoll das im wesentlichen eine Technologie darstellt, in XML eingebettete Daten zu streamen, und dass sich seit seiner Veröffentlichung 1999 :cite:`XMPP|91:online` stark verbreitet hat.
Beispielsweise arbeiten der Facebook-Chat, WhatsApp und GoogleTalk mit XMPP. Ausserdem verwenden Apple, Cisco, IBM, Nokia und Sun XMPP in eingigen ihrer Produkte. (Vgl. :cite:`XMPPTheDefinitiveGuide:companys`)


Durch die Möglichkeit, XMPP Server ähnlich wie Email Server in einem dezentralen Netzwerk zu betreiben, ist aber auch ein Netzwerk von vielen öffentlichen, privat betriebenen XMPP Servern gewachsen. Listen einiger öffentlicher Server finden sich beispielsweise unter jabberes.org/servers :cite:`jabberes|Jabbe36:online` oder xmpp.net/directory :cite:`imobs|IMObs44:online`.


Allerdings bringt die Tatsache, dass XMPP auf einem Textbasierten Protokoll aufbaut auch Nachteile mit sich.

So werden im Falle der Übertragungen von Binärdaten diese erst Base64 kodiert, um sie in den XML Stream einzubetten.
Dies vergrößert die Datenmenge auf ca. 4/3 für diese sogenannten In-Band Übertragungen.
Häufig wird die Übertragungsrate dieser in XML-Datenpakete dann noch von den beteiligten Servern gedrosselt.

.. todo::

    - link zu base64 erklärung suchen;
    - verweisen auf erklärungen in der BA zum thema in-band übertragungen, XEP-0047
    - möglichst ohne wertung erklären das man sich totwarten kann bis so eine übertragung fertig wird


Deshalb stellen In-Band Übertragungen in den meisten Fällen nur den Fallback Modus dar, bevorzugt werden Out-of-Band Übertragungen.

Dies bedeutet, dass eine separate Client-zu-Client Verbindung hergestellt wird, über die die Datenübertragung stattfinden soll. Da hier aber mehrere Erweiterungen existieren, die wiederum von beteiligten Clients sowie Servern unterstützt werden müssen, schlagen diese Übertragungen häufig fehl, sodass in vielen Fällen die Clients auf In-Band Übertragung zurückfallen oder die Übertragung gar nicht zustande kommt.

Diese Thesis stellt eine Methode vor, diese Out-of-Band Übertragungen serverlos abzuwickeln: über das BitTorrent Protokoll (BT).

XMPP dient hierbei nurnoch dazu, die für BitTorrent relevaten Daten weiter zu leiten. Das Herstellen der Verbindung zwischen den Clients sowie die Datenübertragung finden komplett über BitTorrent statt.

.. todo::

    - (warum BitTorrent diese Lücke füllen würde)
    - BT ein bisschen erklären
    - was ich in welchem Kapitel beschreibe
    
.. raw:: latex

    \clearpage