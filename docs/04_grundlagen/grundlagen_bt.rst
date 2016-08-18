
BitTorrent
==========

Für die Datenübertragung soll das BitTorrent Protokoll genutzt werden.
Dieses nutzt, wenn keine Protokollerweiterungen genutzt werden, einen "Tracker" genannten Server zur Vermittlung der Teilnehmer ("Peers").

.. epigraph::

 "BitTorrent is a protocol for distributing files. It identifies content by URL and is designed to integrate seamlessly with the web. Its advantage over plain HTTP is that when multiple downloads of the same file happen concurrently, the downloaders upload to each other, making it possible for the file source to support very large numbers of downloaders with only a modest increase in its load."

 -- :cite:`www.b44:online`

Sinngemäß übersetzt:

 "BitTorrent ist ein Protokoll zum Dateien verteilen. Es bestimmt Inhalt anhand einer URL und ist dazu entworfen sich nahtlos ins Internet zu integrieren. Der Vorteil zu HTTP ist, dass wenn multiple Downloads derselben Datei zur gleichen Zeit stattfinden, die Downloader zueinander uploaden. Dadurch kann eine Dateiquelle sehr viele Downloader bei geringem Anstieg seiner Last haben."


Der Vorteil von BitTorrent als Übertragungsprotokoll ist also, dass wenn mehr als ein Kontakt dieselbe Datei zum Download anbietet, auch von mehreren Kontakten gleichzeitig heruntergeladen werden kann. Hierzu würde normalerweise der Tracker die Peers vermitteln. In Dieser Implementierung soll dies jedoch über XMPP geschehen.

Die Identifikation der Dateien findet laut der BitTorrent Protocol Specification (:cite:`www.b44:online`) über ein "info dict" im torrent-File statt. In dieser Implementierung soll jedoch eine andere Methode genutzt werden: Die in der BitTorrent Extension Protocol (BEP) 9 beschriebene unterstützung für Magnet Links.

 "The purpose of this extension is to allow clients to join a swarm and complete a download without the need of downloading a .torrent file first. This extension instead allows clients to download the metadata from peers. It makes it possible to support magnet links, a link on a web page only containing enough information to join the swarm (the info hash)." :cite:`www.b79:online`

Das in der Spezifikation beschriebene Format eines Magnet Links ist dabei wie folgt:

 magnet:?xt=urn:btih:<info-hash>&dn=<name>&tr=<tracker-url>&x.pe=<peer-address>

Da kein Tracker benötigt wird um Informationen zu verteilen und dynamisch Peer Adressen hinzugefügt werden sollen, wird hier also nur der Info Hash benötigt. Dieser ist der SHA-1 Hash des info dict des torrent-Files.

Da in der zur Implementierung genutzten Libary (libtorrent) die Möglichkeit besteht, einen neuen Torrent auf Basis eines Magnet Links anzulegen, der nur einen Info Hash enthält, und später dynamisch Peer Adressen hinzu zu fügen, ist es möglich das komplette Peer Management zur Laufzeit abzuwickeln.
