.. 05_implementierung:

***************
Implementierung
***************



.. todo::

    # python (skriptsprache, gut für prototyping undso.)

    ## messaging zwischen threads ()

    Verzeichnisstruktur eines Python Moduls (http://docs.python-guide.org/en/latest/writing/structure/#structure-of-the-repository)



Allgemeines zur Implementierung
-------------------------------

Als Programmiersprache zur Implementierung des Prototypen wurde aufgrund der bisherigen Programmiererfahrungen des Autors und des vorhandenseins aller nötigen Bibliotheken Python gewählt.


Die Verzeichnisstruktur ist dabei angelehnt an die Empfehlungen des "Hitchhikers Guide To Python" :cite:`` TODO.
Eine der Übersichtlichkeit wegen vereinfachte Version der Struktur sieht wie folgt aus:


.. code-block:: none
    :linenos:
    :caption: Projektstruktur
    :name: projektstruktur

    bitween/
        components/
            module/
                __init__.py
            __init__.py
        __init__.py
        bitweend.py
        bitweenc.py
    docs/
        conf.py
        index.rst
    tests/
        __init__.py
        test_basic.py
    requirements.txt
    setup.py


1: bitween/
   Der Name des Programms und der Name des Verzeichnisses das den Programmcode enthält

2: components/
   Kernkomponenten des Programms, jedes Verzeichnis ist ein Python Modul. Zur Vereinfachung hier nur eines mit der Bezeichung "module".

3: component/
   Zur Vereinfachung hier nur eine Komponente namens "component".
   Die Datei __init__.py signalisiert hierbei, dass es sich bei dem Verzeichnis um ein importierbares Python Modul handelt.

9: docs/
   Verzeichnis das alle benötigten Dateien zum generieren der Dokumentation enthält. Im einfachsten Fall die von Sphinx benötigte Konfigurationsdatei conf.py und eine reStructuredText-Datei index.rst die als Einstiegspunkt für die Dokumentation dient.

12: tests/
   Das tests-Verzeichnis enthält alle Testläufe.
   Durch das hinzufügen der __init__.py wird hier eine Automatische Testdiscovery ermöglicht. "python setup.py test", ausgeführt im Wurzelverzeichnis des Projektes würde hier Automatisch alle hinterlegten Tests ausführen.

15: requirements.txt
   Die requirements.txt einthält eine Liste der per pip installierbaren Abhängigkeiten des Projekts

16: setup.py
   Das Setupscript enthält alle Informationen, um das Programmmodul mit den Python Distutils bzw. pip zu installieren







.. toctree::

    implementierung_entwurf
    implementierung_xmpp
    implementierung_bt
    implementierung_jsonrpc
    implementierung_ipc
    implementierung_tests


Dokumentation
*************

.. todo::

    rst / sphinx / pydoc / readthedocs...


Logging
*******

.. todo::

    logging modul, lesen aus yml...





Tests
*****

.. toctree::

    implementierung_tests

