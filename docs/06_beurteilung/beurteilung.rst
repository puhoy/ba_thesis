.. 06_beurteilung:

.. _beurteilung:

Beurteilung der Ergebnisse
~~~~~~~~~~~~~~~~~~~~~~~~~~

Während der Implementierung traten eine ganze Reihe an Problemen größerer und kleinerer Natur auf, die so nicht erwartet wurden.


Vor- und Nachteile der serverlosen Dateiübertragung
===================================================

Durch die serverlose Dateiübertragung per BitTorrent umgeht man zwar potentiell langsame Server, verliert aber auch einen "Mittelsmann" für die Übertragung. Befinden sich beispielsweise beide Teilnehmer hinter einem DSL Router, müssen beide Techniken zum Port öffnen unterstützen (oder manuell Ports öffnen) um eine Kommunikation in beide Richtungen zu ermöglichen.
Außerdem müssen nätürlich beide Parteien dasselbe Protokoll sprechen. Hat ein Teilnehmer eine IPv4 Adresse und ein anderer eine IPv6 Adresse, werden diese zwar gegenseitig ihre Torrentlisten erhalten. Allerdings wird nie eine Datenübertragung zustande kommen, da diese vom XMPP Server übermittelt wird.
Zum Teil werden diese Probleme aufgefangen, wenn sich die Teilnehmerzahl erhöht, aber trotzdem werden die Übertragungen aufgrund der Beschränkung auf die bekannten Kontakte nie so reibungsfrei laufen wie "echte" BitTorrent Dateiübertragungen, bei denen ein Tracker oder das Torrent Netz selbst andere Teilnehmer vermittelt und daher viel mehr Endpunkte vorhanden sind.

Aus diesem Grund ist der Erfolg dieser Art der Datenübertragung zu einem gewissen Grad von der Homogenität und Funktionalität des genutzen Netzwerks der Teilnehmer abhängig.


Ebenfalls entfällt mit einem Server eine Instanz, bei der IP Adressen erfragt werden können. Als Ersatz kam hier ipgetter zum Einsatz, das lediglich aus einer Reihe hinterlegter Server einen zufälligen auswählt und die IP erfragt. Ist dieser Server nicht erreichbar, kommt es hier zu Wartezeiten beim Starten des Programms.

libtorrent
==========

Die libtorrent Libary, die sich selbst als "feature complete" :cite:`www.l3:online` bezeichnet, ist vor allem zu Beginn sehr unübersichtlich. Die Dokumentation bezieht sich auf die C++ Schnittstelle und verweist auch bezüglich der Python Bindings auf diese Dokumentation, da alle Elemente dieselben Bezeichnungen haben und ähnlich funktionieren. Trotzdem wurde während der Implementierung zumindest eine Übersicht der zu erwarteten Python Datentypen vermisst.

Dazu kommt eine asynchrone Arbeitsweise, bei der viele Funktionen nur Alerts auslösen, die dann das Ergebnis enthalten und die das Debugging und Tests erheblich verkomplizieren.

Außerdem existieren Inkompatibilitäten zwischen den Versionen, die in den Changelogs nicht gefunden wurden. So ändert sich beispielsweise die Codecerkennung bei Magnet Links zwischen Version 0.16.13 (in den Ubuntu 14.04 Paketquellen) und Version 1.1.0 (zu diesem Zeitpunkt aktuell). Da hier keine Warnung gegeben wird, sondern nur ein Torrent mit invalidem Hash angelegt wird, war die Fehlersuche sehr zeitaufwändig.
Zur Lösung wurden zwei Funktionen zum Umwandeln nach UTF-8 aus dem ebenfalls auf libtorrent aufbauenden BitTorrent Client Deluge übernommen. (siehe bitween/components/bt/helpers.py)

Außerdem exisiert für die libtorrent Installation kein Python Wheel, das die vorkompilierte Libary enthält. Der Nutzer ist hier darauf angewiesen, entweder selbst zu kompilieren oder möglicherweise alte Versionen zu nutzen, die das Betriebssystem bereitstellt. Auch das ist negativ zu werten, da es eine Hürde für unerfahrene Nutzer darstellt und somit die Verbreitung einschränkt.



XMPP Ansätze
============

Auch die Komplexität vom XMPP und seinen Erweiterungen ist nicht zu unterschätzen.
Es wurde auf 2 Bücher zurück gegriffen, die beide einen Einstieg in XMPP geben und von denen eines auch ein Codebeispiel für SleekXMPP verfolgt, jedoch wurde hier PEP nicht näher beleuchtet.
Daher bezog sich die genauere Recherche in den meisten Fällen auf die häufig sehr umfassenden Protokollspezifikationen.


Threading
=========

Während des Testens war es auffällig, das sich die Anwendung in einigen nicht reproduzierbaren Fällen nicht komplett herunterfahren ließ. Hier wurden die Threads des BitTorrent Client und der API Schnittstelle beendet, jedoch lief der XMPP Client weiter. Der Prozess musste in diesen Fällen von Hand beendet werden. Da die BitTorrent Komponente immer kontrolliert herunter gefahren wurde, wurden dabei aber alle zu speichernden Daten in die zugehörige Datenbank geschrieben, sodass kein Datenverlust auftrat.

.. toctree::

    beurteilung_tests

