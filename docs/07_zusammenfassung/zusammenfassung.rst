
.. _ausblick:
Ausblick
~~~~~~~~

Diese erste Version der Anwendung schöpft bei weitem noch nicht das volle Potential der Möglichkeiten dieser Technik aus.
Es sind sowohl noch Probleme zu lösen, als auch das Programm zu erweitern.

So fehlt zur Zeit die Funktionalität, um mögliche Fehler bei Übertragungen zu erkennen.
 Es muss etwa überprüft werden ob mindestens zwei Teilnehmer dieselbe IP Version verwenden oder ob der Client Probleme hatte Ports am Router zu öffnen. In diesen Fällen sollten an den Shares Hinweise verteilt werden, sodass ein Client entscheiden kann, welche Ergebnisse überhaupt angezeigt oder mit Warnungen versehen werden. Genauso sollten "bevorzugte" Verbindungen implementiert werden. Nutzen beide Teilnehmer einen vollen IPv4 und IPv6 Stack, könnte man Verbindungen standardmäßig auf IPv6 starten, um IPv4 NAT zu umgehen.

Außerdem werden die IPv4 Adressen in dieser Version ausschließlich über andere Server herausgefunden, die die eigene öffentliche IP Adresse zurückliefern. Ist ein Server aus dieser Liste nicht erreichbar, wird lange auf ein Timeout der Verbindung gewartet bevor eine nächste Anfrage gestellt wird. Hier sollte man zusätzlich auf andere Techniken zurückgreifen: BitTorrent nutzt beispielsweise eine Technik, um bei anderen Peers die IP Adresse zu erfragen. Hierfür sind natürlich andere Peers nötig. Der erste Kontakt in einer Nutzergruppe müsste also weiterhin andere Techniken nutzen.

Andere mögliche Erweiterungen wären:

 - grafischer Client mit Statistiken über Up-/Downloads
 - Kontrolllisten für Torrents: nicht jeder Kontakt sollte alle Shares bekommen
 - "Backup-Mode": alle Freigaben anderer Ressourcen des eigenen Accounts automatisch downloaden
 - "Wanted" Listen: Kontakte können gesuchte Hashes als "Wanted" publishen. Werden diese von anderen Kontakten gefunden, werden diese downloaden und dem ursprünglich Suchenden zur Verfügung stellen
 - Usermanagement/passwortgeschützter Login für die API
 - Implementierung einer nativen Python BitTorrent Bibliothek, um für eine einfache Installation nicht auf das vorkompilierte libtorrent angewiesen zu sein.


.. _zusammenfassung:

Zusammenfassung
~~~~~~~~~~~~~~~

In der Thesis wurde untersucht, ob es sinnvoll ist, Dateiübertragungen des XMPP Protokolls Out-Of-Band über das BitTorrent Protokoll abzuwickeln.
Dazu wurde ein XMPP und BitTorrent Client entworfen und implementiert.

Daraus zeigten sich, neben einigen "Kinderkrankheiten" dieser frühen Version der Anwendung, auch generelle Probleme dieser Art der Datenübertragung.
Durch die serverlose Datenübertragung fehlt hier eine Instanz, die als Bindeglied zwischen den Clients dient. Das hat zur Folge, dass die Clients sehr genau konfiguriert sein müssen: alle Teilnehmer müssen dasselbe Internet Protocol sprechen, sowie gegebenenfalls die Ports am Router konfiguriert und Firewalls eingestellt werden.
Ein Server hingegen könnte als Brücke zwischen IPv4 und IPv6 dienen und über holepunching Methoden Ports öffnen.

Der entfallende Server ist somit Vor- und Nachteil zugleich: einerseits entfällt hier zentrale Infrastruktur, was das Netzwerk im ganzen ausfallsicherer und schneller machen kann, andererseits entfällt auch ein "Ansprechpartner" der Verbindungen vermittelt oder als Proxyserver dienen kann.
Demzufolge stellt die Datenübertragung per BitTorrent in gut konfigurierter Umgebung eine Verbesserung gegenüber der Übertragung über Server dar, für den Endanwender allerdings müsste das Programm noch sehr viel mehr Funktion zur Fehlererkennung mitbringen um mögliche Verbindungsfehler aufzufangen.
