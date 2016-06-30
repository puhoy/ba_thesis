Einleitung
==========

Das eXtensible Messaging and Presence Protocol (XMPP), umgangssprachlich Jabber, ist ein XML basiertes, offenes Kommunikationsprotokoll das sich seit der ersten Veröffentlichung 1999 [#erste_veroeffentlichung]_ stark verbreitet hat.
Beispielsweise arbeiten der Facebook-Chat, WhatsApp und GoogleTalk mit XMPP.


Durch die Möglichkeit, XMPP Server ähnlich wie Email Server in einem Netzwerk dezentral zu betreiben, ist aber auch ein Netzwerk von vielen öffentlichen, privat betriebenen XMPP Servern gewachsen. Listen einiger öffentlicher Server finden sich beispielsweise unter jabberes.org/servers [#jabberes_org_servers]_ oder xmpp.net/directory [#xmpp_net_directory_php]_ .

Allerdings bringt die Tatsache, dass XMPP auf XML aufbaut auch Nachteile mit sich. Da XML Textbasiert ist, müssen Datenübertragungen, wenn sie In-Band, das heißt im XMPP stattfinden sollen, erst Base64 kodiert werden. Dies vergrößert die Datenmenge um 4/3. Häufig wird die Übertragungsrate dieser in XML verpackten Datenpakete dann noch von den beteiligten Servern gedrosselt.

todo:

- link zu base64 erklärung suchen
- verweisen auf erklärungen in der BA zum thema in-band übertragungen, XEP-0047
- möglichst ohne wertung erklären das man sich totwarten kann bis so eine übertragung fertig wird


Eine Alternative dazu stellen Out-of-Band Übertragungen dar. Dies bedeutet, dass eine separate Client-zu-Client Verbindung hergestellt wird, über die die Datenübertragung stattfinden soll. Da hier aber mehrere Erweiterungen existieren, die wiederum von beteiligten Clients sowie Servern unterstützt werden müssen, schlagen diese Übertragungen häufig fehl, sodass in vielen Fällen die Clients auf In-Band Übertragung zurückfallen oder die Übertragung gar nicht zustande kommt.

Diese Thesis stellt eine Methode vor, diese Out-of-Band übertragungen Serverlos abzuwickeln: über das BitTorrent Protokoll.

XMPP dient hierbei nurnoch dazu, die für BitTorrent relevaten Daten weiter zu leiten. Das Herstellen der Verbindung zwischen den Clients findet komplett über BitTorrent statt.



todo:

- (warum BitTorrent diese Lücke füllen würde)
- BT ein bisschen erklären
- was ich in welchem Kapitel beschreibe


.. [#erste_veroeffentlichung] http://xmpp.org/about/history.html
.. [#jabberes_org_servers] http://www.jabberes.org/servers/
.. [#xmpp_net_directory_php] https://xmpp.net/directory.php
