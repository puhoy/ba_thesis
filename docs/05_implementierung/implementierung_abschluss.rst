
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
Genutzt wird hierfür die Python Libary Requests, um Befehle an die JsonRPC API der Anwendung zu übermitteln.

setup.py
--------

Um diese Anwendung mit den Python setuptools, bzw. dem Paketmanager pip installierbar zu machen, wurde außerdem eine Datei setup.py im Wurzelverzeichnis des Projekts angelegt.

Hier werden der Funktion "setup" der Python setuptools einige Informationen über das Programm übergeben.

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