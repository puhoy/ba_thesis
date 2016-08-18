
Tests
=====

Aufgrund der Tatsache dass hier ein Prototyp entwickelt wurde, dessen Aufbau und Konzept sich unter Umständen noch häufig ändern, wurden ausgiebige Unittests nur für die Datenmodelle und die Inter Process Communication implementiert. Diese stellen eher statische Elemente dar, die sich auch bei neuen Funktionen wenig ändern.

Hierfür wurde der Dienst Travis-CI :cite:`puhoy80:online` in das Git Repository des Projektes auf GitHub (https://github.com/puhoy/bitween :cite:`puhoy98:online`) integriert. Dieser führt bei jedem neuen Commit des Codes mittels eines Webhooks automatische Unittests aus.


Der Rest der Anwendung wurde manuell getestet. Hierfür wurden zwei Clients gestartet: auf einem zur Verfügung stehenden Server mit installiertem Debian 8 und auf einem Ubuntu 14.04 bzw. 16.04 System hinter einem DSL Router bei aktiviertem UPNP.

In den Tests wurde auf jeder Instanz eine Datei freigegeben und auf die jeweils andere Instanz übertragen.
Die Tests beschränkten sich in diesem Fall auf das IPv4, IPv6 konnte nicht getestet werden.


