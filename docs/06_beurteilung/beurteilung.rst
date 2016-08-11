.. zusammenfassung:


Beurteilung der Ergebnisse
~~~~~~~~~~~~~~~~~~~~~~~~~~

Während der Implementierung traten eine ganze Reihe an Problemen größerer und Kleinerer Natur auf, die so nicht erwartet wurden.

Vor- und Nachteile der Serverlosen Dateiübertragung
===================================================

Durch die Serverlose Dateiübertragung per BitTorrent umgeht man zwar potentiell langsame Server, verliert aber auch einen "Mittelsmann" für die Übertragung. Befinden sich beispielsweise beide Teilnehmer hinter einem DSL Router, müssen beide auf Techniken zum Port öffnen unterstützen (oder manuell Ports öffnen) um eine Kommunikation in beide Richtungen zu ermöglichen.
Außerdem, als im nachhinein offensichtliches Beispiel, müssen beide Parteien dasselbe Protokoll sprechen. Hat ein Teilnehmer eine IPv4 Adresse und ein anderer eine IPv6 Adresse, werden diese zwar gegenseitig ihre Torrentlisten erhalten, da diese vom XMPP Server übermittelt wird, allerdings wird nie eine Datenübertragung zustande kommen.
Zu einem Gewissen grad werden diese Probleme aufgefangen, wenn sich die Teilnehmerzahlen erhöhen, aber trotzdem werden diese Übertragungen aufgrund der Beschränkung auf die bekannten Kontakte nie so reibungsfrei laufen wie "echte" BitTorrent Dateiübertragungen, bei denen ein Tracker oder das Torrent Netz selbst andere Teilnehmer vermittelt.

Aus diesem Grund ist der Erfolg dieser Art der Datenübertragung zu einem gewissen Grad von der Homogenität und Funktionalität des genutzen Netzwerks der Teilnehmer abhängig.



    vor/nachteile libtorrent
    (installation hgauptsächlich)

notizen
-------


ipv6 issues
***********

    meatpuppet@sprach ~> ip -6 address show
    1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536
        inet6 ::1/128 scope host
           valid_lft forever preferred_lft forever
    3: wlan0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qlen 1000
        inet6 2a03:2267::f9c6:6c2a:c747:adbe/64 scope global temporary dynamic
           valid_lft 7035sec preferred_lft 2698sec
        inet6 2a03:2267::76e5:bff:fecd:b756/64 scope global dynamic
           valid_lft 7035sec preferred_lft 2698sec
        inet6 fe80::76e5:bff:fecd:b756/64 scope link
           valid_lft forever preferred_lft forever


    >>> netifaces.ifaddresses("wlan0")[10]
    [{'netmask': 'ffff:ffff:ffff:ffff::', 'addr': '2a03:2267::f9c6:6c2a:c747:adbe'}, {'netmask':
     'ffff:ffff:ffff:ffff::', 'addr': '2a03:2267::76e5:bff:fecd:b756'}, {'netmask': 'ffff:ffff:f
    fff:ffff::', 'addr': 'fe80::76e5:bff:fecd:b756%wlan0'}]

-> lib gibt keine auskunft über gültigkeit der adressen

es existiert bereits eine issue dazu:
https://bitbucket.org/al45tair/netifaces/issues/7/ipv6-deprecated-autoconf-temporary

noch lesen: https://tools.ietf.org/html/rfc6724#section-10.1



.. todo::

    "Der Lösungsdokumentation sollte sich eine Beurteilung der Ergebnisse anschließen, die typischerweise auch eine Beschreibung von Testläufen enthält."


.. toctree::

    beurteilung_tests

