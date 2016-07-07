***************
Implementierung
***************

Kernkomponenten des Programms:
 - der BitTorrent Client
 - der/die XMPP Client/s
 - ein Modul zur IPC (PubSub)
 - eine Nutzerschnittstelle zur Bedienung (JsonRPC)


### Verzeichnisstruktur



### Programmaufbau

Bitween ist logisch in verschiedene Module aufgeteilt.

1. BitTorrentClient
1. XmppClient
1. JsonRPC
1. Sentinel
1. PubSub
1. Logging


# python

## messaging zwischen threads


# xmpp

## erweiterungen

### pep (bsp: user tune)

### eigene pep erweiterung


### entity caps





## sleekxmpp



### plugins


# bittorrent

## den weg frei machen

### upnp / natpmp


# JsonRPC

# dokumentation

## rst / sphinx / pydoc...

## logging

## tests

### unittests

### integrationtests

### end-to-end tests

auch travis:
- boot docker container with prosody
