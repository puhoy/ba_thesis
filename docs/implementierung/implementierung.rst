.. implementierung:

***************
Implementierung
***************

Übersicht
---------

.. todo::

    grafik modulübersicht


Das Programm gliedert sich in verschiedene Kernkomponenten, die in den folgenden Kapiteln besprochen werden:

 - der XMPP Client

    Der XMPP Client ist dafür zuständig eine Verbindung mit dem gewünschten XMPP Server herzustellen, bei jeder Aktualisierung der Torrents eine neue Übersicht über die angebotenen Shares an den Server zu übermitteln und Aktualisierungen aus der Kontaktliste zu empfangen.
    Darüber hinaus startet der Client alle weiteren benötigten Prozesse und dient somit aus "Aufseher" über die die Startreihenfolge und eventuelle Abhängigkeiten.

 - der BitTorrent Client

    Der Bittorrent Client lädt beim start eventuell gespeicherte Torrents der letzten Session. Er stellt im Falle von hinzugefügten Torrents eine Verbindung zu allen IP-Adressen (und damit zu allen anderen BitTorrent Clients) her, die bisher per XMPP empfangen wurden.

 - eine Nutzerschnittstelle zur Bedienung (JsonRPC)

    Das JsonRPC Modul dient als Schnittstelle für Frontends.
    Da das Programm theoretisch als Daemon auf einem entfernten Rechner laufen könnte, öffnet es einen Port zur Steuerung.
    Außerdem kann es selbst eine Weboberfläche zur Darstellung der implementierten Funktionen starten.

 - ein Modul zur IPC (PubSub)

    Da alle genannten Module in eigenen Threads laufen wird eine Komponente zur Inter Process Communication benötigt.
    Hierzu wurde eine Publish-Subscribe Pattern implementiert, die das zuweisen der Nachrichten zu Subscribern übernimmt. Außerdem dient es als Basisklasse, von der alle Klassen, deren Objekte Nachrichten empfangen, abgeleitet werden. Dazu wurde eine einfache Scheduling Funktion Implementiert.



.. todo::

    # python (skriptsprache, gut für prototyping undso.)

    ## messaging zwischen threads (https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern)

    Verzeichnisstruktur eines Python Moduls (http://docs.python-guide.org/en/latest/writing/structure/#structure-of-the-repository)



Programmaufbau
--------------

Bitween ist logisch in verschiedene Module aufgeteilt.


.. toctree::

    implementierung_xmpp
    implementierung_bt
    implementierung_jsonrpc
    implementierung_ipc
    implementierung_tests


Logging
*******

.. todo::

    logging modul, lesen aus yml...


Dokumentation
*************

.. todo::

    rst / sphinx / pydoc / readthedocs...



