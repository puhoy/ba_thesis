
Abschluss der Implementierung
=============================

Start Skript
------------

Nachdem nun die wesentlichen Komponenten beschrieben wurden, fehlt nun noch ein Skript, das die Anwendung in der gewünschten Konfiguration startet.
Hierfür wurde das Skript bitweend.py geschrieben.

Die Basiskonfiguration der Anwendung wird in einer Json Datei abgelegt, die als "conf.json" im Verzeichnis bitween gesucht wird, oder falls dort nicht vorhanden, im Home Verzeichnis des Benutzers unter dem Namen ".bitween.json"

Dann kann bitweend gestartet werden. Hier hat man zusätzlich die Möglichkeit mit dem Argument "--debug" das Loglevel auf Debug ausgaben zu setzen, und die API mittels "--port" und "--bind" an einen Port und IP Adresse zu binden. Dies ist sinnvoll, wenn das Programm auf einem entfernten Rechner läuft und von außerhalb bedient werden soll, da der Defaultwert für die IP Adresse "localhost", und die API damit nur für denselben Rechner erreichbar ist, auf dem die Anwendung läuft.


Cmd-Client
----------

Außerdem wurde ein Kommandozeilenclient entworfen, um die grundlegenden Funktionen der Anwendung zu bedienen: Pfade als Torrent freigeben, gefundene Freigaben auflisten und Freigaben anhand von Hashsummen Downloaden.
Genutzt wird hierfür die Python Libary Requests, um Befehle an die JSON-RPC API der Anwendung zu übermitteln.

setup.py
--------

Um diese Anwendung mit den Python setuptools, bzw. dem Paketmanager pip installierbar zu machen, wurde außerdem eine Datei setup.py im Wurzelverzeichnis des Projekts angelegt.

Hier werden der Funktion setup() der Python setuptools einige Informationen über das Programm übergeben.

.. code-block:: python
   :caption: Ausschnitt aus setup.py

    [...]
    install_reqs = parse_requirements("requirements.txt", session=False)

    reqs = [str(ir.req) for ir in install_reqs]

    [...]

    setup(
        name='bitween',
        version='0.0.1',
        description='experimental XMPP/BT Client',
        long_description=readme,
        author='Jan Hartmann',
        url='https://github.com/puhoy/bitween',
        # license=license,
        packages=find_packages(exclude=('tests', 'docs')),
        test_suite="tests",
        entry_points={
            'console_scripts': [
                'bitweend=bitween.bitweend:main',
                'bitweenc=bitween.bitweenc:main'
            ]
        },
        install_requires=reqs
    )

Hier werden etwa die benötigten Python Pakete aus der Datei "requirements.txt" eingelesen, Variablen wie der Name des Programms, die Version und der Autor.
Außerdem werden Entrypoints übergeben. "bitweend" kann daraufhin nach der Installation ausgeführt werden und verweist auf die Funktion "main" im bitweend Skript. Analog dazu wird ein Entrypoint für "bitweenc" angelegt.

Die Installation kann dann erfolgen mit dem Aufruf von "pip install -e pfad/zum/projekt"

Dokumentation
-------------

Für die gesamte Anwendung wurde Dokumentation in Form von Docstrings an allen Funktionen, Methoden, Modulen und Klassen verfasst. Diese sind im reStructuredText Format gehalten.

Um diese Dokumentation übersichtlich dar zu stellen, kann aus den Docstrings mit dem Dokumentationsgenerator Sphinx (www.sphinx-doc.org :cite:`Overv9:online`) eine Dokumentation in anderen Formaten wie HTML oder PDF erstellt werden.

Die Konfiguration von Sphinx geschieht dabei über die Datei conf.py im Verzeichnis docs.
Mit dem Skript build_docs.sh im Wurzelverzeichnis des Projekts kann dann das automatisierte erstellen der benötigten Dokumentationsdateien angestoßen werden. Diese sind untereinander logisch verkettet und können so in späteren Formaten wie HTML verlinkt werden.

Außerdem wurde eine Datei index.rst geschrieben, die als Einsprungpunkt in die automatisch generierte Dateistruktur dient.


Integration in andere Dienste
-----------------------------

Dadurch, das dieses Projekt in Git Versioniert und auf GitHub, einem Git Hostingdienst für (hauptsächlich) OpenSource Programme entwickelt wurde, war es naheliegend, darauf basierende weiterführende Dienste zu benutzen.
So wurden drei externe Dienste in dieses Projekt integriert:

ReadTheDocs (readthedocs.io :cite:`Welco38:online`)
  um automatisch Dokumentationen in HTML aus den Docstrings des Programms zu erstellen und zu hosten. Dabei wird nach jedem "git push" auf den Server ein Webhook ausgelöst, der das Erstellen einer neuen Version der Dokumentation antriggert. Zu finden ist diese Dokumentation unter http://bitween.readthedocs.io/en/develop/ und auf der beiliegenden CD.

Travis-CI (travis-ci.org :cite:`puhoy80:online`)
  für automatisierte Unittests. Diese werden ebenfalls per Webhook vom Server ausgelöst. So wird jeder Commit automatisch getestet. Außerdem wird eine History über vergangene Tests geführt.

Coveralls (coveralls.io :cite:`puhoy65:online`)
  das die prozentuale Abdeckung des Codes durch die Testfälle darstellt. Dieser erhält die Testabdeckung von Travis-CI nach jedem Test. Auch hier wird eine History bis auf die Ebene einzelner Dateien erstellt. Außerdem wird grafisch dargestellt, welche Zeilen einer Datei ausgeführt wurden.

