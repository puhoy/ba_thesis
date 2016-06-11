## Zusammenhänge und Grundlagen

### XMPP

#### Dateiübertragungen

#### PEP



## Implementierung

### Programmaufbau

Bitween ist logisch in verschiedene Module aufgeteilt.

1. BitTorrentClient
1. XmppClient
1. JsonRPC
1. Sentinel
1. PubSub


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

# ipv6 issues

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
