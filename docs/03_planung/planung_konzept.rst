

Konzept
=======

.. _fig-concept:

.. figure:: resources/concept_simple.png
   :align: center
   :alt: Konzept

   Grafik zum Konzept der Anwendung


Diagramm :num:`fig-concept` zeigt das Grundkonzept der Anwendung. Erreicht werden soll also im ersten Schritt eine Datenfreigabe über BitTorrent und das Verteilen der nötigen Freigabeinformationen über XMPP an die Kontakte der jeweiligen Kontaktliste.

Freigabeinformationen umfassen die von BitTorrent benötigten Prüfsummen der freigegebenen Daten, die zur eindeutigen Identifikation dienen, dazu Dateinamen und -Größe, der den Anwendern hilft den Inhalt einzuschätzen, sowie Adresse und Port unter der die Freigaben für andere Teilnehmer zu finden sind. Eine Gegenstelle, die die Freigabeinformationen empfangen hat, kann dann über IP-Adresse, Port und die Prüfsumme einen Download von der Gegenstelle anstoßen. Falls für einen Hashwert, und damit eine Freigabe, mehrere Adressen vorliegen, kann der Download auch von mehreren Quellen gleichzeitig erfolgen.

Sobald ein Teil der Daten von einer Gegenstelle heruntergeladen wurde, wird diese als neue Freigabe des Kontakts auch an dessen Kontakte übermittelt, und agiert so als ein neuer Knotenpunkt der ebenfalls Teile dieser Datei zum Download anbietet.


Auf diese Art kann in relativ kleinem Kreis ein verteiltes Filesharing stattfinden.


