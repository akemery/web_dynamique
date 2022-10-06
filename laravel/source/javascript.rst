JAVASCRIPT WEB APIS
-------------------

Qu'est-ce que le scripting ?
============================
Un script est un programme qui n'a pas besoin de pré-traitement (par exemple, compilation) avant d'être exécuté. Dans le contexte
d'un navigateur Web, les scripts font généralement référence au code de programme écrit en JavaScript qui est exécuté par le navigateur lorsqu'une page est téléchargée ou en réponse à un événement déclenché par l'utilisateur.

Les scripts peuvent rendre les pages Web plus dynamiques. Par exemple, sans recharger une nouvelle version d'une page, il peut autoriser des modifications du contenu de cette page (DHTML (Dynamic HTML)), ou autoriser l'ajout ou l'envoi de contenu à partir de cette page (AJAX (Asynchronous JavaScript and XML)). 

Au-delà, les scripts permettent de plus en plus aux développeurs de créer un pont entre le navigateur et la plate-forme sur laquelle il s'exécute, permettant, par exemple, de créer des pages Web qui intègrent des informations de l'environnement de l'utilisateur, telles que l'emplacement actuel, les détails du carnet d'adresses, etc.

Cette interactivité supplémentaire fait que les pages Web se comportent comme une application logicielle traditionnelle. Ces pages Web sont souvent appelées applications Web et peuvent être mises à disposition soit directement dans le navigateur sous forme de page Web, soit empaquetées et distribuées sous forme de widgets.

.. code-block:: html

    <html>
      <head>

        <script type="text/javascript">
           function mymessage() {
             alert("This message was triggered from the onload event");
           }
       </script>
     </head>

    <body onload="mymessage()">
    </body>

   </html>
   
   

.. code-block:: html

    <html>
   <head>
     <script type="text/javascript">
       cc=0;
       function changeimage()
       {
         if (cc==0) 
         {
           cc=1;
          document.getElementById('myimage').src="bulbon.gif";
         }
        else
        {
          cc=0;
          document.getElementById('myimage').src="bulboff.gif";
        }
     }
    </script>
   </head>

   <body>
     <img id="myimage" onclick="changeimage()" 
     border="0" src="bulboff.gif" 
     width="100" height="180" />
    <p>Click to turn on/off the light</p>
   </body>
   </html>




Quelles interfaces de script sont disponibles ?
===============================================

L'interface de script la plus basique développée au W3C est le DOM, le Document Object Model qui permet aux programmes et aux scripts d'accéder et de mettre à jour dynamiquement le contenu, la structure et le style des documents. Les spécifications DOM forment le cœur du DHTML.

Les modifications du contenu à l'aide du DOM par l'utilisateur et par des scripts déclenchent des événements que les développeurs peuvent utiliser pour créer des interfaces utilisateur riches.

Un certain nombre d'interfaces plus avancées sont en cours de standardisation, par exemple :

    * XMLHttpRequest permet de charger du contenu supplémentaire à partir du Web sans charger un nouveau document, un composant central d'AJAX,
    * l'API de géolocalisation rend l'emplacement actuel de l'utilisateur disponible pour les applications basées sur un navigateur, 
    * plusieurs API rendent transparente l'intégration des applications Web avec le système de fichiers local et le stockage.
    
WAI ARIA propose des mécanismes pour garantir que cette interactivité supplémentaire reste utilisable indépendamment des appareils et des handicaps. Des considérations supplémentaires s'appliquent au développement d'applications Web pour appareils mobiles.


.. code-block:: html

   <html>
     <head>
       <script type="text/javascript">
          function moveover()
          {
             document.getElementById('image').src="bulbon.gif";
          }
          function moveback()
          {
             document.getElementById('image').src="bulboff.gif";
          }
      </script>
     </head>
   <body>

    <b>Mouse over the image</b><br />
    <img id="image" src="bulboff.gif"
    onmouseover="moveover()"
    onmouseout="moveback()" width="100" height="180" />

   </body>
   </html>


Référence du DOM
================

Le Document Object Model ou DOM (pour modèle objet de document) est une interface de programmation pour les documents HTML, XML et SVG. Il fournit une représentation structurée du document sous forme d'un arbre et définit la façon dont la structure peut être manipulée par les programmes, en termes de style et de contenu. Le DOM représente le document comme un ensemble de nœuds et d'objets possédant des propriétés et des méthodes. Les nœuds peuvent également avoir des gestionnaires d'événements qui se déclenchent lorsqu'un événement se produit. Cela permet de manipuler des pages web grâce à des scripts et/ou des langages de programmation. Les nœuds peuvent être associés à des gestionnaires d'événements. Une fois qu'un événement est déclenché, les gestionnaires d'événements sont exécutés.


Une page Web est un document. Celui-ci peut être affiché soit dans la fenêtre du navigateur, soit sous la forme de son code source HTML. Mais il s'agit du même document dans les deux cas. Le modèle objet de document proposé par le DOM fournit une autre manière de représenter, stocker et manipuler ce même document. Le DOM est une représentation entièrement orientée objet de la page Web, et peut être manipulé à l'aide d'un langage de script comme JavaScript.


Les normes DOM du W3C et WHATWG DOM forment la base du DOM implémenté dans la plupart des navigateurs modernes. Beaucoup d'entre-eux fournissent des extensions allant plus loin que le standard, faites donc attention lorsque vous les utilisez sur le Web, où les documents peuvent être consultés par de nombreux navigateurs avec chacun un DOM différent.

Par exemple, DOM du W3C spécifie que la méthode getElementsByTagName dans le code ci-dessous doit renvoyer une liste de tous les éléments <P> présents dans le document :

.. code-block:: html

   const paragraphs = document.querySelectorAll("p");
   // paragraphes[0] est le premier élément <p>
   // paragraphes[1] est le second élément <p>, etc.
   alert(paragraphes[0].nodeName);


Chacune des propriétés et des méthodes et chacun des évènements disponibles permettant la manipulation et la création de pages Web sont organisés dans des objets (par exemple, l'objet document qui représente le document lui-même, l'objet table qui implémente l'interface DOM particulière HTMLTableElement permettant d'accéder aux tables HTML, etc.). 

DOM et Javascript
=================

Le DOM n'est pas un langage de programmation, mais sans lui le langage JavaScript n'aurait aucun modèle ni aucune notion des pages Web, des documents XML, et des éléments pour lesquels il est généralement utilisé. Chaque élément d'un document, que ce soit le document lui-même, ses en-têtes, les tableaux internes au document, les en-têtes de colonnes et le texte contenu dans les cellules de ces tableaux, fait partie du modèle objet de document (DOM) de ce document. Tous ces éléments sont donc accessibles et peuvent être manipulés à l'aide du DOM et d'un langage de script comme JavaScript.

À l'origine, JavaScript et le DOM étaient fortement liés, mais ils ont fini par évoluer en deux entités distinctes. Le contenu de la page est stocké dans le DOM et on peut y accéder et le manipuler via JavaScript, de la sorte qu'on pourrait écrire cette équation approximative :

.. code-block::
   API(page Web ou XML) = DOM + JS(langage de script)
   

Le DOM a été conçu pour être indépendant de tout langage de programmation, ce qui rend la représentation structurelle du document disponible à l'aide d'une API simple et cohérente. Bien que cette documentation de référence se concentre uniquement sur JavaScript, des implémentations du DOM peuvent être construites pour n'importe quel langage, comme le démontre cet exemple en Python :

.. code-block:: python

    # Exemple d'utilisation du DOM en Python
    import xml.dom.minidom as m
    doc = m.parse("C:\\Projects\\Py\\chap1.xml");
    doc.nodeName # Propriété DOM de l'objet document;
    p_list = doc.getElementsByTagName("para");
    

Méthodes d'accès au DOM
=======================

Il n'y a rien de particulier à faire pour commencer à utiliser le DOM. Les différents navigateurs ont différentes implémentations du DOM, et celles-ci présentent des degrés divers de conformité au standard DOM de référence (un sujet que l'on tente d'éviter dans cette documentation), mais chacun d'entre eux utilise un modèle objet de document pour rendre les pages Web accessibles aux scripts.

Lorsque vous créez un script, qu'il figure au sein de la page dans un élément <SCRIPT> ou soit inclus au moyen d'une instruction de chargement de script, vous pouvez immédiatement commencer à utiliser l'API. En accédant aux éléments document ou window, vous pouvez manipuler le document lui-même ou parcourir les enfants de ces éléments, qui sont les divers éléments de la page Web. Votre programmation DOM peut être très simple, comme l'exemple suivant qui affiche un message d'avertissement à l'aide de la fonction alert() de l'objet window, ou peut utiliser des méthodes DOM plus sophistiquées pour créer du nouveau contenu comme dans l'exemple plus bas.

Le code JavaScript suivant affichera une alerte quand le document est chargé (et quand le DOM entier est disponible à l'utilisation).

.. code-block:: html

    <body onload="window.alert('Bienvenue sur ma page Web !');">
    
Un autre exemple. Cette fonction crée un nouvel élément H1, y ajoute du texte, et ajoute ensuite cet élément à l'arbre du document :


.. code-block:: html

   <html>
   <head>
    <script>
       // run this function when the document is loaded
       window.onload = function() {

         // create a couple of elements in an otherwise empty HTML page
         const heading = document.createElement("h1");
         const heading_text = document.createTextNode("Gros titre !");
         heading.appendChild(heading_text);
         document.body.appendChild(heading);
      }
    </script>
   </head>
   <body>
   </body>
   </html>



Types de données fondamentaux
=============================

Types de données interface
--------------------------

document
........

Lorsqu'un membre renvoie un objet de type document (par exemple la propriété ownerDocument d'un élément, qui retourne le document auquel il appartient), cet objet est l'objet document racine lui-même. Le chapitre référence de DOM document décrit l'objet document en détail. 

Node
.....

Chaque objet du document est sous une forme ou une autre un noeud. Dans un document HTML, un objet peût être un élément nœud, mais aussi un nœud text ou nœud attribut. 

Element
........

Le type élément est basé sur le nœud. Il se réfère à un élément ou nœud de type élément renvoyé par un membre de l'API DOM. Plutôt que de dire, par exemple que la méthode document.createElement() renvoie une réference à un objet de type nœud, nous dirons simplement que cette méthode renvoie l'élément qui vient juste d'être créer dans le DOM. Les objets element implémentent l'interface DOM element, mais aussi l'interface plus basique node, qui sont toutes les deux incluses dans cette réference. dans un document HTML, les éléments sont mis en valeur par l'interface API HTML DOM HTMLElement aussi bien que par d'autres interfaces décrivant les capacités d'éléments spécifiques ( par exemple , HTMLTableElement for <table> elements). 


NodeList
.........

Une nodeList est un tableau d'éléments, comme celui qui est renvoyé par la méthode document.getElementsByTagName(). Les éléments d'une nodeList sont accessibles par un index de deux manières différentes :

    - list.item(1)
    - list[1]

Ces deux lignes sont équivalentes. Dans la première, item() est la méthode de l'objet nodeList. La seconde utilise la syntaxe habituelle d'un tableau pour accéder au second élément de la liste. 


Attribute
..........

Lorsqu'un attribute est renvoyé par un membre (par exemple par la méthode createAttribute()), il s'agit d'une référence à un objet qui expose une interface particulière (et limitée) aux attributs. Les attributs sont des nœuds dans le DOM tout comme les éléments, mais ils seront rarement utilisés de cette manière.

NamedNode
..........

Une namedNodeMap est comme un tableau, mais où l'on peut accéder aux éléments à la fois par nom ou par index. Cette dernière possibilité est cependant juste là pour faciliter l'énumération, car la liste n'est pas dans un ordre particulier. Une namedNodeMap a une méthode item() pour la même raison, et il est également possible d'ajouter et de retirer des élements d'une namedNodeMap. 

Les Interfaces DOM
==================

Un des objectifs de ce cours est de ne pas trop parler de l'héritage abstrait d'interfaces, et d'autres détails d'implémentation, et de se concentrer plutôt sur les objets dans le DOM qui sont leschoses réelles utilisables pour manipuler la hiérarchie du DOM. Du point de vue du programmeur Web, il est rarement utile de savoir que l'objet représentant l'élément HTML FORM reçoit sa propriété name de l'interface HTMLElement. Dans les deux cas, la propriété désirée est simplement l'objet de formulaire.

Cependant, la relation entre les objets et les interfaces qu'ils implémentent dans le DOM peut entrainer une certaine confusion, c'est pourquoi cette section tente de présenter un tant soit peu les interfaces figurant dans la spécification du DOM et la manière dont elles sont rendues disponibles.

Les interfaces et les objets
-----------------------------

De nombreux objets empruntent à plusieurs interfaces différentes. L'objet table par exemple implémente une interface spécialisée de l'élément HTML Table, qui comprend des méthodes telles que createCaption et insertRow. Mais comme il s'agit également d'un élément HTML, table implémente aussi l'interface Element décrite dans le chapitre Référence de DOM element. Enfin, comme un élément HTML est, du point de vue du DOM, un nœud au sein de l'arbre de nœuds qui forment le modèle objet pour une page HTML ou XML, l'objet table implémente aussi l'interface plus basique Node, dont dérive Element.

Lorsque vous obtiendrez une référence à un objet table, comme dans l'exemple suivant, vous utiliserez régulièrement ces trois interfaces de manière interchangeable sur l'objet, peut-être même sans le savoir.

.. code-block:: html

   var table = document.getElementById("table");
   var tableAttrs = table.attributes; // Interface Node/Element
   for(var i = 0; i < tableAttrs.length; i++){
     // Interface HTMLTableElement : attribut border
     if(tableAttrs[i].nodeName.toLowerCase() == "border")
      table.border = "1";
   }
   // Interface HTMLTableElement : attribut summary
   table.summary = "note : bordure plus large";

Interface essentielles du DOM
------------------------------

Cette section liste certaines des interfaces les plus couramment utilisées dans le DOM. L'idée n'est pas ici de décrire ce que font ces API, mais de vous donner une idée des sortes de méthodes et propriétés que vous verrez très souvent en utilisant le DOM. 

Les objets document et window sont ceux dont les interfaces sont les plus souvent utilisées dans la programmation DOM. En termes simples, l'objet window représente quelque chose comme le navigateur, et l'objet document est la racine du document lui-même. Element hérite de l'interface générique Node, et ensemble ces deux interfaces fournissent un grand nombre des méthodes et propriétés utilisables sur des éléments individuels. Ces éléments peuvent également avoir des interfaces spécifiques pour traiter le type de données que ces éléments contiennent, comme dans l'objet table donné en exemple dans la section précédente.

Ce qui suit est une brève liste des API communes au script de page dans le Web et XML utilisant le DOM.

    - document.getElementById(id)
    
    - document.getElementsByTagName(name)
    
    - document.createElement(name)
    
    - parentNode.appendChild(node)
    
    - element.innerHTML
    
    - element.style.left
    
    - element.setAttribute()
    
    - element.getAttribute()
    
    - element.addEventListener()
    
    - window.content
    
    - window.onload (en-US)
    
    - console.log()
    
    - window.scrollTo()

Test de l'API DOM
------------------


.. code-block:: html

   <html>
    <head>
      <title>Tests du DOM</title>
     <script type="application/x-javascript">
      function setBodyAttr(attr,value){
      if(document.body) eval('document.body.'+attr+'="'+value+'"');
         else notSupported();
      }
     </script>
   </head>
   <body>
       <div style="margin: .5in; height="400"">
          <p><b><tt>text</tt> color</p>
          <form>
          <select onChange="setBodyAttr('text',
             this.options[this.selectedIndex].value);">
               <option value="black">black
               <option value="darkblue">darkblue
          </select>
             <p><b><tt>bgColor</tt></p>
             <select onChange="setBodyAttr('bgColor',
                this.options[this.selectedIndex].value);">
        <option value="white">white
        <option value="lightgrey">gray
      </select>
      <p><b><tt>link</tt></p>
      <select onChange="setBodyAttr('link',
          this.options[this.selectedIndex].value);">
        <option value="blue">blue
        <option value="green">green
      </select>  <small>
          <a href="http://www.brownhen.com/dom_api_top.html" id="sample">
      (exemple de lien)</a></small><br>
    </form>
    <form>
      <input type="button" value="version" onclick="ver()" />
    </form>
    </div>
   </body>
   </html>


https://developer.mozilla.org/fr/docs/Web/API/Document_Object_Model/Introduction

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
