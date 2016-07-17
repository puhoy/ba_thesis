
IPC
***

Die Kommunikation zwischen den Threads wurde durch eine PublishSubscribe Pattern gelöst.
Wie bei XMPP-PubSub können Teilnehmer (in diesem Fall Objekte der jeweiligen Klassen) Nachrichten zu bestimmten Topics abonnieren ("subscriben"). Außerdem steht eine "publish" Methode zur Verfügung, mit der Nachrichten auf bestimmten Topics veröffentlicht werden können.

.. todo::

   https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern

   link xmpp pubsub

Hierzu wurde eine Klasse "Subscriber" implementiert die als Basisklasse für alle anderen Klassen dient, die Nachrichten empfangen.
Jedes Subscriber-Objekt besitzt eine Queue, die alle noch unverarbeiteten Nachrichten enthält, eine subscribe-Methode um Nachrichten zu Topics zu "Abonnieren" sowie eine has_messages- und get_messages-Methode um den Zustand der Queue abzufragen und Nachrichten zu entnehmen.


.. code-block:: python
   :linenos:
   :caption: pubsub.py Subscriber Klasse (__init__)
   :name: pubsub-py-subscriber-init

    class Subscriber:
        def __init__(self, name='', autosubscribe=False):
            # [...]
            self.queue = queue.Queue()
            # [...]
            if autosubscribe:
                listen_to = [x for x, y in self.__class__.__dict__.items() if
                             (type(y) == FunctionType and x.startswith('on_'))]
                for l in listen_to:
                    self.subscribe(l.split('on_')[1])

        def subscribe(self, topic):
            # [...]
            t = _get_topic(topic)
            # [...]
                if self not in t['subscribers']:
                    # [...]
                    t['subscribers'].append(self)
                    return True
                else:
                    logger.error('already subscribed to %s' % topic)
                    return False
        # [...]


Im einfachsten Fall wird ein Subscriber Objekt ohne Parameter erstellt. Dann wird nur eine Nachrichtenqueue angelegt (Zeile 4) und es können Topics mit subscribe('topicname') abonniert werden.

.. code-block:: python

    s = Subscriber()
    s.subscribe('some_topic')

Dazu wird in der Methode ein Dictionary mit den subscribern des Topics geholt (Zeile 14), oder wenn nicht vorhanden, ein neues Topic angelegt.
Falls das Subscriber Objekt noch nicht in der 'subscribers'-Liste ist, wird es angehangen (Zeile 18) und die Methode mit True verlassen, andernfalls bleibt die Liste unverändert und False wird zurück gegeben.

Eine interessantere Anwendung ergibt sich, wenn eine Subklasse von Subscriber erstellt und autosubscribe mit True aufgerufen wird. In diesem Fall wird erst eine Liste mit allen Methoden erstellt, deren Name mit "on_" beginnt (Zeile 7 und 8). Dann wird über die Liste der gesammelten Namen iteriert: das "on_" am Anfang wird abgeschnitten, und der resultierende String wird als Topic abonniert.
Damit besteht die Möglichkeit, Methoden der Klassen direkt als Topics zu abonnieren und es entfällt das händische zuordnen von Topics und Funktionsaufrufen.

Als Beispiel hierzu dient die folgende Klasse AutoSub, die sich von Subscriber ableitet.

.. code-block:: python

    class AutoSub(Subscriber):
        def __init__(self):
            Subscriber.__init__(self, autosubscribe=True)

        def process_messages(self):
            if self.has_messages():
                topic, args, kwargs = self.get_message()
            try:
                f = getattr(self, 'on_%s' % topic)
                f(*args, **kwargs)

            except Exception as e:
                logger.error('something went wrong when calling on_%s: %s' % (topic, e))

        def on_some_topic(self, some_string, some_int=1):
            print('some_string is %s' % some_string)
            print('some_int is %s' % some_int)

Die Subklasse mit einer Scheduling Methode wie der hier gezeigten process_messages und der Methode on_some_topic würde dann also automatisch das Thema "some_topic" abonnieren.
Wird dann eine Nachricht in diesem Topic abgelegt, würde während des Schedulings on_some_topic mit den argumenten aus der Nachricht aufgerufen.

In einer Python Shell sieht das ganze wie folgt aus:

.. code-block:: python

    >>> s = AutoSub()
    >>> publish('some_topic', 'teststring')
    True
    >>> s.process_messages()
    some_string is teststring
    some_int is 1

**********

.. todo::

    ab hier überarbeiten. publish müsste vllt über das subscribe zeugs, damit das verstanden wird.



Hierzu einige Erklärungen anhand des Quellcodes. (components/pubsub/pubsub.py)

.. code-block:: python
   :linenos:
   :caption: pubsub.py publish Funktion
   :name: pubsub-py-publish

    [...]
    topics = {}

    def publish(topic, *args, **kwargs):
        # [...]
        t = _get_topic(topic)
        # [...]

        if not t['subscribers']:
            logger.error('published to topic %s with no subscribers' % topic)
            return False

        with Lock():
            for s in t['subscribers']:
                logger.debug('published message on topic %s: %s %s' % (topic, args, kwargs))
                s._put_message((topic, args, kwargs))
            return True


Die Topics Variable hält ein Dictionary mit allen Topics und deren Subscribern. Sie ist auf Modullevel angelegt und hat somit bei jedem "import pubsub" den selben Inhalt.

Wird nun die publish Funktion mit einem Topic aufgerufen, wird zuerst ermittelt, ob die Liste der Subscriber leer ist (Zeile 9): in diesem Fall wird ein False zurück gegeben.
Hat das Topic Subscriber, wird der Teil des Codes, in dem über die Subscriber iteriert wird erst mit einem Lock für andere Threads gesperrt (Zeile 13) und dann für jeden Subscriber mittels _put_message() (Zeile 16) das Topic und die Argumente hinzugefügt.




.. _overview:

.. figure:: resources/pubsub_overview.png
   :align: center
   :alt: Signalübersicht

   Übersicht der Publisher, Topics und Subscriber



.. todo::

    pubsub (siehe wikipedia publish subscribe pattern)