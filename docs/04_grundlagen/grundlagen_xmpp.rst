
XMPP
----

- Technologie zum XML streamen :cite:`XMPPTheDefinitiveGuide:streamingxml`


Erweiterungen
*************


.. note::

    The Jabber Software Foundation (JSF) was founded in 2001 to coordinate the efforts around the
    Jabber protocol and its implementations. By late 2002, the JSF had submitted the core protocol specifications
    to the IETF process, and an IETF working group was formed. In October 2004, this standards
    process produced improved versions of the Jabber protocols, renamed XMPP, documented as
    RFCs 3920, 3921, 3922, and 3923.

    During the protocol’s early life, developers continued to expand its possibilities by submitting
    protocol extensions to the JSF. These extensions were called Jabber Extension Proposals (JEPs).

    Eventually the JSF and the extensions followed the naming change from Jabber to XMPP and
    became the XMPP Standards Foundation (XSF) and XMPP Extension Proposals (XEPs).



Instead of extending <presence> stanzas directly, it is a best practice to make use of the Personal Eventing Protocol, or PEP, defined in XEP-0163, which allows users to subscribe to the extra data they are interested in. The PEP extension, along with Entity Capabilities (XEP-0114) and Service Discovery (XEP-0015), make providing extended presence-type information efficient and opt-in. :cite:`professionalxmpp:pep`

.. note::

    auch interessant: definitive guide, p 117 ff

.. todo::

    beispielstream

    service disco, pubsub, entity caps



PEP
***

.. todo::

    pep:
      https://oneminutedistraction.wordpress.com/2010/09/13/difference-between-pubsub-and-pep/

      TL;DR:
        - user postet "interest" in presence (bei der anmeldung)
        - user bekommt alles was an rosterkontakten zu dem interest gepostet wird

      beispiel: user tune (XEP-0118)
