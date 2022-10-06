Internationalisation
--------------------

L'accès au Web pour tous a été une préoccupation et un objectif fondamental du World Wide Web Consortium depuis le début. Malheureusement, il est facile de négliger les besoins des personnes de cultures différentes de la vôtre, ou qui utilisent des langues ou des systèmes d'écriture différents. Si vous le faites, vous créerez des spécifications et du contenu qui présenteront des obstacles à l'utilisation de votre technologie ou de votre contenu pour de nombreuses personnes dans le monde. 

Qu'est-ce que l'internationalisation ?
======================================

Si vous vous internationalisez, vous concevez ou développez votre contenu, votre application, vos spécifications, etc., d'une manière qui garantit qu'il fonctionnera bien ou qu'il pourra être facilement adapté pour des utilisateurs de toute culture, région ou langue.

Le mot « Internationalisation » est souvent abrégé en « i18n ». C'est une abréviation largement utilisée, dérivée du fait qu'il y a 18 lettres entre le 'i' et le 'n'.

Exemples
========

Un aspect fondamental de l'internationalisation est de s'assurer que la technologie prend en charge le texte dans n'importe quel système d'écriture du monde. C'est pourquoi les technologies du W3C reposent sur le jeu de caractères universel Unicode. Il peut être nécessaire de prendre également en charge d'autres jeux de caractères et encodages hérités.

.. image:: ../images/canonequiv.png
  :width: 200
  :alt: Image des formes canoniquement équivalentes de é.

Cependant, d'autres facteurs doivent être pris en compte lors de l'utilisation de caractères. Par exemple, les encodages basés sur Unicode permettent de stocker exactement le même texte en utilisant des combinaisons de caractères légèrement différentes. Pour plus d'efficacité et de précision dans la comparaison, le tri et l'analyse du texte, les différentes séquences doivent être reconnues comme « canoniquement équivalentes ». Vous devez réfléchir à la manière de gérer cela lors du développement d'applications ou de spécifications qui exécutent ou reposent sur de telles tâches.

.. image:: ../images/verticaltext.png
  :height: 200
  :alt: Image de texte chinois vertical.

Parfois, différents systèmes d'écriture nécessitent un support spécial. Par exemple, le japonais, le chinois, le coréen et le mongol peuvent être écrits verticalement, de sorte que le W3C s'assure que CSS, SVG et XSL-FO permettront la prise en charge du texte vertical. Les méthodes d'alignement et de justification du texte sont également différentes pour de tels scripts, et différentes encore pour des scripts comme le thaï et le tibétain. D'autres conventions typographiques locales existent souvent pour des éléments tels que l'accentuation, les annotations, la numérotation des listes, etc. Ces approches typographiques doivent être supportées dans des feuilles de style.

L'arabe, l'hébreu, le persan, l'ourdou et les langues similaires mélangent du texte de droite à gauche et de gauche à droite sur la même ligne, et il est important de pouvoir contrôler la direction du contexte environnant pour que cela fonctionne correctement. Cela signifie que les développeurs de schémas et de formats doivent fournir aux auteurs des moyens de contrôler la direction de leur contenu. Les schémas, les langages de balisage et les formats doivent également prendre en charge un certain nombre d'autres constructions nécessaires pour une gestion efficace du contenu pendant la traduction et la localisation.

Image de texte bidirectionnel en arabe.

Si vous utilisez des formulaires HTML ou concevez des ontologies relatives aux noms et adresses de personnes, vous devrez réfléchir à la manière d'activer les nombreuses approches différentes de formatage des données qui sont possibles dans le monde. Vous devrez peut-être également prendre en charge des calendriers alternatifs, des fuseaux horaires et des heures d'été, des noms et des adresses sous forme native et translittérée, etc.

Les développeurs de contenu et les systèmes de gestion de contenu doivent également être préparés à faire face aux problèmes linguistiques et culturels. Par exemple, une phrase qui est construite en combinant plusieurs phrases ensemble dans une langue peut être impossible à traduire de manière sensée dans une langue avec une structure de phrase différente. Par exemple, dans la traduction japonaise de "Page 1 sur 34", tous les éléments de la phrase seraient dans l'ordre inverse. Votre demande ne doit pas restreindre l'ordre dans lequel ces éléments peuvent être combinés. Les spécifications des technologies telles que les widgets et les navigateurs vocaux devraient également éviter d'enfermer les développeurs dans une syntaxe biaisée en anglais pour des choses telles que la composition de messages ou le déclenchement d'événements associés au texte.

Graphique illustrant l'ordre des mots entre l'anglais et l'hindi.

Graphique illustrant l'ordre des mots entre l'anglais et le finnois.

Un cercle peut représenter « oui » au Japon et une coche « non ».

Les problèmes culturels doivent également être pris en compte. Le symbolisme peut être spécifique à une culture. La coche signifie correct ou OK dans de nombreux pays. Dans certains pays, cependant, comme le Japon, cela peut être utilisé pour signifier que quelque chose est incorrect. Les localisateurs japonais peuvent avoir besoin de convertir les coches en cercles (leur symbole pour « correct ») dans le cadre du processus de localisation.

Ce ne sont que quelques exemples parmi tant d'autres. Le message clé est que la conception (qu'il s'agisse d'un langage de balisage, d'un protocole, d'un système de gestion de contenu, d'un widget ou d'une application, etc.) doit être suffisamment flexible pour s'adapter aux besoins locaux.
