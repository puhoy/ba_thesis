
Allgemeines zur Implementierung
===============================

Als Programmiersprache zur Implementierung des Prototypen wurde aufgrund der bisherigen Programmiererfahrungen des Autors und des vorhandenseins aller nötigen Bibliotheken Python gewählt.


Die Verzeichnisstruktur des Projektes ist dabei angelehnt an die Empfehlungen des "Hitchhikers Guide To Python" :cite:`hitchhikers_structure:online`.
Eine der Übersichtlichkeit wegen vereinfachte Version der Struktur sieht wie folgt aus:


.. code-block:: none
    :caption: Projektstruktur
    :name: projektstruktur

    bitween/
        components/
        bitweend.py
        bitweenc.py
    docs/
        conf.py
        index.rst
    tests/
    requirements.txt
    setup.py


bitween/
   Der Name des Programms und der Name des Verzeichnisses das den Programmcode enthält.

   Im Unterverzeichnis "components" befinden sich die Module in denen die jeweiligen funktionen und Klassen implementiert wurden.
    Ein Modul umfasst dabei jeweils eine Datei "__init__.py", die das Verzeichnis als Modul in Python importierbar macht und (je nach Modul) beliebige andere .py-Dateien. Da in Python keine privaten Methoden existieren, werden in der __init__.py werden alle alle Funktionen oder Klassen aus dem Modul importiert, die von anderen Modulen benötigt werden könnten. So wird eine logische Abgrenzung geschaffen zu Elementen die nur im Modul benötigt werden, und solchen die für die Nutzung von anderen Modulen gedacht sind.
   Der Aufbau der einzelnen Komponenten wird in den folgenden Kapiteln besprochen.

bitweend.py
   Der Einstiegspunkt für das Programm, zum starten des Daemons. (Bitweend ist hier kurz für Bitween Daemon)

bitweenc.py
   Client für die JsonRPC API des Programms.

docs/
   Verzeichnis das alle benötigten Dateien zum generieren der Dokumentation enthält. Im einfachsten Fall die von Sphinx benötigte Konfigurationsdatei conf.py und eine reStructuredText-Datei index.rst die als Einstiegspunkt für die Dokumentation dient.

tests/
   Das tests-Verzeichnis enthält alle Testläufe.
   Durch das hinzufügen der __init__.py wird hier eine Automatische Testdiscovery ermöglicht. "python setup.py test", ausgeführt im Wurzelverzeichnis des Projektes würde hier Automatisch alle hinterlegten Tests ausführen.

requirements.txt
   Die requirements.txt einthält eine Liste der per pip installierbaren Abhängigkeiten des Projekts

setup.py
   Das Setupscript enthält alle Informationen, um das Programm mit den Python Distutils bzw. pip zu installieren

