GRAPHIQUES
----------

Le Web, c'est plus que du texte et de l'information, c'est aussi un moyen d'expression de la créativité artistique, de la visualisation de données et d'optimisation de la présentation de l'information pour différents publics avec des besoins et des attentes différents. 
L'utilisation de graphiques sur les sites Web améliore l'expérience des utilisateurs, et le W3C dispose de plusieurs technologies différentes et complémentaires qui fonctionnent avec HTML et les scripts pour fournir aux créateurs de pages Web et d'applications Web les outils dont ils ont besoin pour fournir la meilleure représentation possible de leur contenu. 



Qu'est-ce que les graphiques ?
==============================

Les graphiques Web sont des représentations visuelles utilisées sur un site Web pour améliorer ou permettre la représentation d'une idée ou d'un sentiment, afin d'atteindre l'utilisateur du site Web. Les graphiques peuvent divertir, éduquer ou avoir un impact émotionnel sur l'utilisateur et sont essentiels à la force de l'image de marque, à la clarté de l'illustration et à la facilité d'utilisation des interfaces.

Des exemples de graphiques incluent des cartes, des photographies, des conceptions et des modèles, des arbres généalogiques, des diagrammes, des plans architecturaux ou techniques, des graphiques à barres et des camemberts, une typographie, des schémas, des dessins au trait, des organigrammes et de nombreuses autres formes d'images.

Les graphistes disposent de nombreux outils et technologies pour tout, de l'impression au développement Web, et le W3C fournit de nombreux formats sous-jacents pouvant être utilisés pour la création de contenu sur la plate-forme Web ouverte.

A quoi servent les graphiques ?
===============================

Les graphiques sont utilisés pour tout, de l'amélioration de l'apparence des pages Web à la couche de présentation et d'interaction utilisateur pour les applications Web à part entière.

Différents cas d'utilisation des graphiques exigent des solutions différentes, il existe donc plusieurs technologies différentes. Les photographies sont mieux représentées avec PNG, tandis que les dessins au trait interactifs, la visualisation des données et même les interfaces utilisateur ont besoin de la puissance de SVG et de l'API Canvas. CSS existe pour améliorer d'autres formats comme HTML ou SVG. WebCGM répond aux besoins d'illustration et de documentation techniques de nombreuses industries.

Qu'est-ce que le PNG ?
======================

Portable Network Graphics (PNG) est un format de fichier statique pour le stockage et l'échange sans perte, portable et bien compressé d'images raster (bitmaps). Il offre un contrôle des couleurs riche, avec une prise en charge des couleurs indexées, des niveaux de gris et des couleurs vraies et une transparence du canal alpha. PNG est conçu pour le Web, avec des capacités de streaming et de rendu progressif. Il est pris en charge de manière omniprésente dans les navigateurs Web, les outils de création graphique, les boîtes à outils d'images et d'autres parties de la chaîne d'outils de création. Les fichiers PNG ont l'extension de fichier ".PNG" ou ".png" et doivent être déployés en utilisant le type de média "image/png". Les images PNG peuvent être utilisées avec HTML, CSS, SVG, l'API Canvas et WebCGM.

Qu'est-ce que le SVG ?
======================

Les graphiques vectoriels évolutifs (SVG) sont comme le HTML pour les graphiques. Il s'agit d'un langage de balisage permettant de décrire tous les aspects d'une image ou d'une application Web, de la géométrie des formes au style du texte et des formes, en passant par l'animation et les présentations multimédias, y compris la vidéo et l'audio. Il est entièrement interactif et inclut un DOM scriptable ainsi qu'une animation déclarative (via la spécification SMIL). Il prend en charge un large éventail de fonctionnalités visuelles telles que les dégradés, l'opacité, les filtres, l'écrêtage et le masquage.

L'utilisation de SVG permet des graphiques entièrement évolutifs, fluides et réutilisables, des graphiques simples pour améliorer les pages HTML, aux graphiques entièrement interactifs et à la visualisation des données, aux jeux, aux images statiques autonomes de haute qualité. SVG est pris en charge nativement par la plupart des navigateurs modernes (avec des plugins pour permettre son utilisation sur tous les navigateurs) et est largement disponible sur les appareils mobiles et les décodeurs. Tous les principaux outils de dessin de graphiques vectoriels importent et exportent du SVG, et ils peuvent également être générés via des langages de script côté client ou côté serveur.



Qu'est-ce que le CSS ?
======================

Les feuilles de style en cascade (CSS) sont le langage utilisé pour décrire la présentation des pages Web, y compris les couleurs, la mise en page et les informations sur les polices. Il peut être utilisé pour améliorer les aspects graphiques du HTML et du SVG. 

Qu'est-ce que l'API Canvas ?
============================

L'API Canvas est une technologie de script côté client permettant la création ou la modification d'images raster (bitmaps) . Il utilise des méthodes de programmation vectorielles pour créer des formes, des dégradés et d'autres effets graphiques, et comme il n'a pas de DOM, il peut fonctionner très rapidement. Les scripteurs dédiés peuvent développer des jeux ou même des applications complètes en utilisant l'API Canvas, seule ou intégrée dans HTML ou SVG. Il est pris en charge nativement dans la plupart des navigateurs modernes (avec des bibliothèques de scripts étendant la prise en charge à tous les principaux navigateurs), et même sur certains appareils mobiles.

Qu'est-ce que WebCGM ?
======================

Web Computer Graphics Metafile (WebCGM) est le profil Web de CGM, la norme ISO pour la définition d'images vectorielles et composites vectorielles/raster. CGM a un nombre important d'adeptes dans l'illustration technique, la documentation électronique interactive, la visualisation de données géophysiques, entre autres domaines d'application, et est largement utilisé dans les domaines de l'ingénierie automobile, de l'aéronautique et de l'industrie de la défense. WebCGM possède bon nombre des mêmes fonctionnalités graphiques que SVG.

Exemples
========

Comme exemple simple de fichier image SVG, voici un cercle avec un dégradé pour lui donner un aspect 3D :

.. code-block:: xml

    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 100">
     
        <defs>
            <radialGradient id="rg" cx="100" cy="100" fx="80" fy="80" gradientUnits="userSpaceOnUse">
            <stop offset="5%" stop-color="lightskyblue" />
            <stop offset="100%" stop-color="darkblue" />
            </radialGradient>
       </defs>
      <circle id="circle_1" cx="100" cy="100" r="95" fill="url(#rg)"/>
   </svg>
   
   
Pour plus d'informations visitez https://www.w3.org/Consortium/Offices/Presentations/SVG/0.svg ou https://www.w3.org/TR/SVGPrintPrimer12/



