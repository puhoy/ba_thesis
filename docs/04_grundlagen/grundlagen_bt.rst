
BitTorrent
==========

Für die Datenübertragung soll das BitTorrent Protokoll genutzt werden.
Dieses nutzt, wenn keine Protokollerweiterungen genutzt werden einen "Tracker" genannten Server zur Vermittlung der Teilnehmer ("Peers").

.. epigraph::

 "BitTorrent is a protocol for distributing files. It identifies content by URL and is designed to integrate seamlessly with the web. Its advantage over plain HTTP is that when multiple downloads of the same file happen concurrently, the downloaders upload to each other, making it possible for the file source to support very large numbers of downloaders with only a modest increase in its load."

 -- :cite:`www.b44:online`

In deutsch etwa:

 "BitTorrent ist ein Protokoll zum Dateien verteilen. Es bestimmt Inhalt anhand einer URL und ist dazu entworfen sich nahtlos ins Internet zu integrieren. Der Vorteil zu HTTP ist, dass wenn multiple Downloads derselben Datei zur gleichen Zeit stattfinden, die Downloader zueinander Uploaden. Dadurch kann eine Dateiquelle sehr viele Downloader bei geringem Anstieg seiner Last haben."


Der Vorteil von BitTorrent als Übertragungsprotokoll ist also, dass wenn mehr als ein Kontakt dieselbe Datei zum Download anbietet, auch von mehreren Kontakten gleichzeitig heruntergeladen werden kann. Hierzu würde Normalerweise der Tracker die Peers vermitteln. In Dieser Implementierung soll dies jedoch über XMPP geschehen.

Die Identifikation der Dateien, normalerweise per .torrent File, basiert in der umgesetzten Implementierung auf einem SHA-1 Hash wie er auch in einem Magnetlink benutzt würde. So kann einer Datei ein eindeutiger Hashwert zugeordnet werden.



.. todo::

    BitTorrent ist auch zum Teil Zentral
     -> BT Tracker als Einsprungpunkt benötigt


    Torrentfiles / Magnetlinks
     Prüfsummen
      -> SHA-1 als Hashalgorithmus