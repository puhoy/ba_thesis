.. konzept:


*******
Konzept
*******

.. _fig-concept:

.. figure:: resources/concept_simple.png
   :align: center
   :alt: Konzept

   Grafik zum Konzept der Anwendung


Diagramm :num:`fig-concept` zeigt die Grundfunktionalität der Anwendung. Erreicht werden soll also eine Datenfreigabe über BitTorrent und das Verteilen der nötigen Freigabeinformationen über XMPP.

Freigabeinformationen umfassen Prüfsummen der freigegebenen Daten, die zur eindeutigen Identifikation der Daten dienen, dazu einen Dateinamen und -Größe, der den Anwendern hilft den Inhalt einzuschätzen, sowie Adresse und Port unter der die Freigaben zu finden sind.


.. _fig-usecases:

.. figure:: resources/usecases.png
   :align: center
   :alt: Usecases

   Anwendungsfälle

Das Anwendungsfalldiagramm :num:`fig-usecases` zeigt die geplanten Anwendungsfälle die implementiert werden sollen, um die Anwendung sinnvoll Nutzen zu können.
So sollen eigene Freigaben erstellt und entfernt werden können (AF/10/ und AF/20/) sowie Freigaben anderer Nutzer aufgelistet und durchsucht werden können, als auch Downloads angestoßen werden können. (AF/30/ bis AF/40/)

.. todo::

   AF: accounts hinzufügen geht bis jetzt nur in der json...