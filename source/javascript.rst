JAVASCRIPT WEB APIS
-------------------

Qu'est-ce que le scripting ?
============================
Un script est un programme qui n'a pas besoin de pré-traitement (par exemple, compilation) avant d'être exécuté. Dans le contexte
d'un navigateur Web, les scripts font généralement référence au code de programme écrit en JavaScript qui est exécuté par le navigateur lorsqu'une page est téléchargée ou en réponse à un événement déclenché par l'utilisateur.

Les scripts peuvent rendre les pages Web plus dynamiques. Par exemple, sans recharger une nouvelle version d'une page, il peut autoriser des modifications du contenu de cette page (DHTML (Dynamic HTML)), ou autoriser l'ajout ou l'envoi de contenu à partir de cette page (AJAX (Asynchronous JavaScript and XML)). 

Au-delà, les scripts permettent de plus en plus aux développeurs de créer un pont entre le navigateur et la plate-forme sur laquelle il s'exécute, permettant, par exemple, de créer des pages Web qui intègrent des informations de l'environnement de l'utilisateur, telles que l'emplacement actuel, les détails du carnet d'adresses, etc.

Cette interactivité supplémentaire fait que les pages Web se comportent comme une application logicielle traditionnelle. Ces pages Web sont souvent appelées applications Web et peuvent être mises à disposition soit directement dans le navigateur sous forme de page Web, soit empaquetées et distribuées sous forme de widgets.


Quelles interfaces de script sont disponibles ?
===============================================

L'interface de script la plus basique développée au W3C est le DOM, le Document Object Model qui permet aux programmes et aux scripts d'accéder et de mettre à jour dynamiquement le contenu, la structure et le style des documents. Les spécifications DOM forment le cœur du DHTML.

Les modifications du contenu à l'aide du DOM par l'utilisateur et par des scripts déclenchent des événements que les développeurs peuvent utiliser pour créer des interfaces utilisateur riches.

Un certain nombre d'interfaces plus avancées sont en cours de standardisation, par exemple :

    * XMLHttpRequest permet de charger du contenu supplémentaire à partir du Web sans charger un nouveau document, un composant central d'AJAX,
    * l'API de géolocalisation rend l'emplacement actuel de l'utilisateur disponible pour les applications basées sur un navigateur, 
    * plusieurs API rendent transparente l'intégration des applications Web avec le système de fichiers local et le stockage.
    
WAI ARIA propose des mécanismes pour garantir que cette interactivité supplémentaire reste utilisable indépendamment des appareils et des handicaps. Des considérations supplémentaires s'appliquent au développement d'applications Web pour appareils mobiles.


Au-delà des scripts
===================

Alors que les scripts offrent une excellente opportunité de développer de nouvelles interfaces et d'expérimenter de nouvelles
interactions avec les utilisateurs, au fil du temps, un certain nombre de ces ajouts bénéficient d'une approche plus
déclarative ; par exemple, au lieu que chaque développeur réimplémente une interface de calendrier qui permet à un utilisateur
de choisir une date, définir un type d'entrée (<input type='date' />) qui le fait automatiquement permet de gagner beaucoup de
temps et les bugs, et crée un terrain pour de nouvelles innovations.

Au-delà de l'ensemble des interfaces déclaratives mises à disposition via HTML, plusieurs technologies ont été développées pour
rendre possibles ces applications Web déclaratives.

Pour plus d'information visitez les liens suivants: https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/JavaScript_basics , https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Introduction ,  https://developer.mozilla.org/fr/docs/Learn/Tools_and_testing/Client-side_JavaScript_frameworks et https://developer.mozilla.org/fr/docs/Web/JavaScript/Inheritance_and_the_prototype_chain
