Audio et Vidéo
--------------

Qu'est-ce que l'audio et la vidéo ?
===================================

Les termes audio et vidéo font généralement référence au format de stockage multimédia basé sur le temps pour les informations sur le son/la musique et les images animées. L'enregistrement numérique audio et vidéo, également appelé codecs audio et vidéo, peut être non compressé, compressé sans perte ou compressé avec perte en fonction de la qualité souhaitée et des cas d'utilisation.

Les codecs audio peuvent généralement contenir un canal audio (mono), deux canaux audio (stéréo) ou plusieurs canaux (par exemple, surround "5.1"). Par exemple, la voix humaine est enregistrée en utilisant un canal tandis que la musique utilise en général deux canaux ou plus. La qualité variera en fonction du débit, c'est-à-dire du nombre de bits utilisés par unité de temps de lecture.

Les codecs vidéo contiendront une séquence d'images, c'est-à-dire des images fixes et, pour les formats compressés, des mouvements entre ces images. La qualité variera en fonction du nombre d'images par seconde, de l'espace colorimétrique, de la résolution, etc.

Les formats de stockage multimédia contiendront des flux de codecs audio, des flux de codecs vidéo, des sous-titres et des méta-informations. Il les combine pour fournir l'audio ou la vidéo, avec des matériaux alternatifs ou améliorés. En général, une vidéo aura un flux de codec vidéo, un ou plusieurs flux de codec audio alternatifs, et peut avoir des sous-titres et des méta-informations.


A quoi servent l'audio et la vidéo ?
====================================


L'audio et la vidéo sont utilisés pour améliorer l'expérience avec les pages Web (par exemple, l'arrière-plan audio) pour diffuser de la musique, des vidéos familiales, des présentations, etc. ou la langue des signes.

Qu'est-ce que SMIL ?
====================

SMIL est le langage d'intégration multimédia synchronisé, un langage basé sur XML pour décrire des présentations multimédia interactives. Il combine audio, vidéo, hypertexte, images dans le temps et dans l'espace, permettant des transitions visuelles entre les deux.

Qu'est-ce que le texte chronométré ?
====================================

Timed Text est un langage basé sur XML pour les médias de texte chronométré dans le but d'échanger entre les systèmes de création. Il peut également être utilisé directement comme format de diffusion, donc adapté au sous-titrage ou à la description vidéo.

Que sont les fragments de médias ?
==================================

Les fragments de média fournissent un moyen standard indépendant du format de média d'adresser des fragments de média, dans le temps et dans l'espace, sur le Web à l'aide d'identifiants (URL, URI, IRI).

Que sont les annotations multimédias ?
======================================

Les annotations multimédias fournissent des moyens de décrire les ressources multimédias, à l'aide d'un ensemble commun de propriétés. Ces annotations aident à transmettre des informations qui peuvent ensuite être réutilisées dans les moteurs de recherche ou les systèmes de balisage.

Exemples
========

Voici quelques exemples de SMIL, SVG et HTML respectivement avec du contenu vidéo :

.. code-block:: html

   <smil xmlns="http://www.w3.org/ns/SMIL">
       <body>
           <par>
               <video src="http://www.example.org/MyVideo" fill="freeze"/>
               <text src="http://www.example.org/MyCaption" fill="freeze" />
          </par>   
      </body>
   </smil>
   
   

.. code-block:: html

    <svg xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
           <g>
             <video xlink:href="http://www.example.org/MyVideo"
              x="0" y="0" width="360" height="240" />
          </g>
   </svg>

.. code-block:: html

    <!DOCTYPE html>
       <html>
          <head>   
            <title>My Video</title>
         </head>
         <body>   
            <video src="http://www.example.org/MyVideo"
              width="360" height="240">
         </body>   
      </html>
      

Pour plus d'informations consultez https://developer.mozilla.org/fr/docs/Web/SVG/SVG_animation_with_SMIL et https://www.w3.org/TR/REC-smil/smil-animation.html

