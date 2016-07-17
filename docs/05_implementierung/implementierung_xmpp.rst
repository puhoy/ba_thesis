XMPP
====

.. todo::

    sleekxmpp




Plugins
-------

.. todo::

    was sagt die sleekxmpp doku zu plugins? (da war iwas)




SleexXMPP PEP Plugin
********************


.. todo::

    kurze wiederholung + verweis auf xmpp
     -> user tune

    erweiterung auf Basis von UserTune
     -> diff zur änderung


problem: sleekxmpp benutzt für pubsub, xep-163, keine extended stanzas (xep-0033, replyto)

 -> wir können nur pro user shares definieren, nicht per resource
    http://xmpp.org/extensions/xep-0163.html#notify-addressing #3

lösung:

wir bekommen auf jedem account unsere eigenen pep nachrichten zugeschickt. wir definieren also eine struktur, die unsere freigaben nach resourcen gliedert, und erweitern gegebenenfalls die liste der ressourcen um ein element, das die freigaben der aktuellen resource enthält.

