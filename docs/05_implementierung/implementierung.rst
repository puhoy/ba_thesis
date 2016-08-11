.. 05_implementierung:


Implementierung
~~~~~~~~~~~~~~~


.. toctree::

    implementierung_allgemeines
    implementierung_entwurf

    implementierung_bt
    implementierung_xmpp
    implementierung_web
    implementierung_ipc
    implementierung_abschluss


Integration in andere Dienste
=============================

Dadurch, das dieses Projekt in Git Versioniert und auf GitHub, einem Git Hostingdienst für (hauptsächlich) OpenSource Programme entwickelt wurde, war es naheliegend, darauf basierende weiterführende Dienste zu benutzen.
So wurden drei externe Dienste in dieses Projekt integriert:

- ReadTheDocs, um automatisch Dokumentationen in HTML aus den Docstrings des Programms zu erstellen und zu hosten. Dabei wird nach jedem "git push" auf den Server ein Webhook ausgelöst, der das erstellen einer neuen Version der Dokumentation antriggert. Zu finden ist diese Dokumentation unter http://bitween.readthedocs.io/en/develop/ und auf der angefügten CD.

- Travis-CI, für automatisierte Unittests. Diese werden ebenfalls per Webhook vom Server ausgelöst. So wird jeder Commit automatisch getestet. Außerdem wird eine History über vergangene Tests geführt.

- Coveralls, das die prozentuale Abdeckung des Codes durch die Testfälle darstellt. Dieser erhält die Testabdeckung von Travis-CI nach jedem Test. Auch hier wird eine History bis auf die Ebene einzelner Dateien erstellt. Außerdem wird grafisch dargestellt, welche Zeilen einer Datei ausgeführt wurden.
