.. zukunft:


Ausblick
~~~~~~~~


Diese Erste Version der Anwendung schöpft bei weitem noch nicht das volle Potential der Möglichkeiten dieser Technik aus.
Es sind sowohl noch Probleme zu lösen, als auch das Programm zu Erweitern.

So fehlt zur Zeit Funktionalität, um mögliche Fehler bei Übertragungen zu erkennen. Sprechen mindestens 2 Teilnehmer dieselbe IP Version? Hatte der Client Probleme Ports am Router zu öffnen? In diesen Fällen sollten an den Shares Hinweise verteilt werden, sodass ein Client entscheiden kann, welche Ergebnisse überhaupt angezeigt oder mit Warnungen versehen werden. Genauso sollten "bevorzugte" Verbindungen implementiert werden. Nutzen beide Teilnehmer einen vollen IPv4 und IPv6 Stack, könnte man Verbindungen standardmäßig auf IPv6 starten, um IPv4 NAT zu umgehen.

Außerdem werden die IPv4 Adressen in dieser Version ausschließlich über andere Server herausgefunden, die die eigene öffentliche IP Adresse zurückliefern. Ist ein Server aus dieser Liste nicht erreichbar, wird lange auf ein Timeout der Verbindung gewartet bevor eine nächste Anfrage gestellt wird. Hier sollte man zusätzlich auf andere Techniken zurückgreifen: BitTorrent nutzt beispielsweise eine Technik, um bei anderen Peers die IP Adresse zu erfragen. Hierfür sind natürlich andere Peers nötig - der Erste Kontakt in einer Nutzergruppe müsste also weiterhin andere Techniken nutzen.

Andere mögliche Erweiterungen wären:

 - grafischer Client mit Statistiken über Up/Downloads
 - Kontrolllisten für Torrents: nicht jeder Kontakt sollte alle Shares bekommen
 - "Backup-Mode": alle Freigaben anderer Ressourcen des eigenen Accounts automatisch Downloaden
 - "Wanted" Listen: Kontakte können gesuchte Hashes als "Wanted" publishen. Werden diese von anderen Kontakten gefunden, werden diese Downloaden und dem ursprünglich Suchenden zur Verfügung stellen
 - Usermanagement/passwortgeschützter Login für die API
