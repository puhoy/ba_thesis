.. implementierung:

***************
Implementierung
***************

Übersicht
---------

Kernkomponenten des Programms:
 - der BitTorrent Client
 - der/die XMPP Client/s
 - ein Modul zur IPC (PubSub)
 - eine Nutzerschnittstelle zur Bedienung (JsonRPC)



.. todo::

    # python (skriptsprache, gut für prototyping undso.)

    ## messaging zwischen threads (https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern)

    Verzeichnisstruktur eines Python Moduls (http://docs.python-guide.org/en/latest/writing/structure/#structure-of-the-repository)



Programmaufbau
--------------

Bitween ist logisch in verschiedene Module aufgeteilt.

1. BitTorrentClient
1. XmppClient
1. JsonRPC
1. Sentinel
1. PubSub
1. Logging



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



