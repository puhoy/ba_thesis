
Web
===

Die Web Komponente soll nun, nachdem die Basisfunktionalität seitens der Datenübertragung implementiert ist, eine Schnittstelle für Nutzer und Frontends zur Steuerung bieten.

Um das Programm auch auf entfernten Rechnern steuern zu können, wurde hier die Variante einer JsonRPC API gewählt.
Außerdem wurde ein minimales Web Frontend implementiert um bereits erhaltene Torrentlisten und eigene Torrents darzustellen.
Dafür wurde das Web Framework Flask, bzw. das Flask Plugin Flask-JSONRPC genutzt.

Eine minimale Flask Anwendung ist dabei sehr einfach strukturiert.
Erst wird ein Flask-Objekt erzeugt, welches dann Methoden zur Verfügung stellt, die wiederum als Decorator für Funktionen genutzt werden.

.. code-block:: python
   :caption: Flask Beispiel :cite:`flask:online`

    from flask import Flask
    app = Flask(__name__)

    @app.route("/")
    def hello():
        return "Hello World!"

    if __name__ == "__main__":
        app.run()

In diesem Beispiel wird ein Objekt "app" aus der Klasse Flask erzeugt. Daraufhin wird die Funktion hello mit app.route("/") dekoriert, was zur Folge hat, das wenn die Anwendung mit app.run() lokal gestartet wird, beim Aufruf von "http://localhost:5000/" in einem Browser, der String "Hello World!" ausgegeben wird. 5000 ist hier der Standardport von Flask und kann bei Bedarf angepasst werden.


Aufbau der Komponente
---------------------



.. figure:: resources/classes_web.png
   :align: center
   :alt: Klassendiagramm Web
   :width: 20%

   Klassendiagramm Web

Da auch dieser Teil parallel zum XmppClient und dem BitTorrentClient laufen muss, soll das app-Objekt in einem neuen Thread gestartet werden.


.. figure:: resources/packages_web.png
   :align: center
   :alt: Packages Web

   Packages Web

Das Modul an sich ist unterteilt in die Submodule api und gui. Im Modul api sind die Funktionen der JsonRPC API definiert, und ist wiederum unterteilt in "bt" und "xmpp", um die dort definierten Routen entsprechend ihrem Zweck aufzuteilen.

Das gui Modul beinhaltet Routen und Ressourcen um das Web Frontend auszuliefern.



.. todo::

    was zu jsonrpc suchen