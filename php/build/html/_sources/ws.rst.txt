.. https://www.w3.org/TR/ws-arch/
.. https://www.w3schools.com/xml/xml_services.asp

Services Web
------------

Objectif de l'architecture de service Web
=========================================

Les services Web fournissent un moyen standard d'interopérabilité entre différentes applications logicielles, s'exécutant sur une variété de plates-formes et/ou de frameworks.  Le WSA fournit un modèle conceptuel et un contexte pour comprendre les services Web et les relations entre les composants de ce modèle.

Le WSA décrit à la fois les caractéristiques minimales communes à tous les services Web et un certain nombre de caractéristiques nécessaires à de nombreux services Web, mais pas à tous.

L'architecture de services Web est une architecture d'interopérabilité : elle identifie les éléments globaux du réseau mondial de services Web qui sont nécessaires pour assurer l'interopérabilité entre les services Web.

Agents et services
..................

Un service Web est une notion abstraite qui doit être implémentée par un agent concret. (Voir Figure 1-1) L'agent est la partie concrète du logiciel ou du matériel qui envoie et reçoit des messages, tandis que le service est la ressource caractérisée par l'ensemble abstrait de fonctionnalités qui est fourni. Pour illustrer cette distinction, vous pouvez implémenter un service Web particulier en utilisant un jour un agent (peut-être écrit dans un langage de programmation) et un autre agent le lendemain (peut-être écrit dans un langage de programmation différent) avec la même fonctionnalité. Bien que l'agent puisse avoir changé, le service Web reste le même.

Demandeurs et fournisseurs
..........................

Le but d'un service Web est de fournir certaines fonctionnalités au nom de son propriétaire - une personne ou une organisation, telle qu'une entreprise ou un individu. L'entité fournisseur est la personne ou l'organisation qui fournit un agent approprié pour mettre en œuvre un service particulier. (Voir Figure 1-1 : Rôles architecturaux de base.)

Une entité demandeuse est une personne ou une organisation qui souhaite utiliser le service Web d'une entité fournisseur. Il utilisera un agent demandeur pour échanger des messages avec l'agent fournisseur de l'entité fournisseur.


.. image:: ../images/intro_ws_roles.png
  :width: 400
  :alt: Web services architecture

Description du service
......................

Les mécanismes de l'échange de messages sont documentés dans une description de service Web (WSD). (Voir Figure 1-1) Le WSD est une spécification exploitable par machine de l'interface du service Web, écrite en WSDL. Il définit les formats de message, les types de données, les protocoles de transport et les formats de sérialisation de transport qui doivent être utilisés entre l'agent demandeur et l'agent fournisseur. Il spécifie également un ou plusieurs emplacements de réseau auxquels un agent fournisseur peut être invoqué, et peut fournir des informations sur le modèle d'échange de messages qui est attendu. Essentiellement, la description du service représente un accord régissant les mécanismes d'interaction avec ce service. 


Sémantique
..........

La sémantique d'un service Web est l'attente partagée sur le comportement du service, notamment en réponse aux messages qui lui sont envoyés. En effet, il s'agit du « contrat » entre l'entité demandeuse et l'entité fournisseur concernant le but et les conséquences de l'interaction. Bien que ce contrat représente l'accord global entre l'entité demandeuse et l'entité fournisseur sur comment et pourquoi leurs agents respectifs interagiront, il n'est pas nécessairement écrit ou explicitement négocié. Il peut être explicite ou implicite, oral ou écrit, traitable par machine ou orienté vers l'homme, et il peut s'agir d'un accord juridique ou d'un accord informel (non juridique). (Encore une fois, il s'agit d'une légère simplification qui sera expliquée plus en détail dans 3.3 Utilisation des services Web.)

Alors que la description du service représente un contrat régissant les mécanismes d'interaction avec un service particulier, la sémantique représente un contrat régissant le sens et le but de cette interaction. La ligne de démarcation entre ces deux n'est pas nécessairement rigide. Comme des langages plus riches sur le plan sémantique sont utilisés pour décrire les mécanismes de l'interaction, davantage d'informations essentielles peuvent migrer de la sémantique informelle vers la description du service. Au fur et à mesure que cette migration se produit, une plus grande partie du travail requis pour obtenir une interaction réussie peut être automatisée.




Définitions
...........

Les services Web sont des composants d'application Web. Les services Web peuvent être publiés, trouvés et utilisés sur le Web.


WSDL
....

     * WSDL signifie Web Services Description Language
     * WSDL est un langage basé sur XML pour décrire des services Web.
     * WSDL est une recommandation du W3C

SOAP
....

     * SOAP signifie Simple Object Access Protocol
     * SOAP est un protocole basé sur XML pour accéder aux services Web.
     * SOAP est basé sur XML
     * SOAP est une recommandation du W3C


RDF
...

     * RDF signifie Resource Description Framework
     * RDF est un framework pour décrire des ressources sur le web
     * RDF est écrit en XML
     * RDF est une recommandation du W3C

RSS
...

     * RSS signifie Really Simple Syndication
     * RSS vous permet de syndiquer le contenu de votre site
     * RSS définit un moyen facile de partager et d'afficher les titres et le contenu
     * Les fichiers RSS peuvent être automatiquement mis à jour
     * RSS permet des vues personnalisées pour différents sites
     * RSS est écrit en XML


