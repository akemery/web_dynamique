.. https://www.w3schools.com/PhP/php_intro.asp

PHP
---

Qu'est-ce que PHP ?
===================

    * PHP est l'acronyme de "PHP : Hypertext Preprocessor"
    * PHP est un langage de script open source largement utilisé
    * Les scripts PHP sont exécutés sur le serveur
    * PHP est gratuit à télécharger et à utiliser
    
Qu'est-ce qu'un fichier PHP ?
=============================

Les fichiers PHP peuvent contenir du texte, du HTML, du CSS, du JavaScript et du code PHP. Le code PHP est exécuté sur le serveur et le résultat est renvoyé au navigateur en tant que code HTML brut. Les fichiers PHP ont l'extension `.php`

Que peut faire PHP ?
====================

    * PHP peut générer du contenu de page dynamique
    * PHP peut créer, ouvrir, lire, écrire, supprimer et fermer des fichiers sur le serveur
    * PHP peut collecter des données de formulaire
    * PHP peut envoyer et recevoir des cookies
    * PHP peut ajouter, supprimer, modifier des données dans votre base de données
    * PHP peut être utilisé pour contrôler l'accès des utilisateurs
    * PHP peut crypter les données

Avec PHP, vous n'êtes pas limité à la sortie HTML. Vous pouvez produire des images, des fichiers PDF et même des films Flash. Vous pouvez également sortir n'importe quel texte, tel que XHTML et XML.


Pourquoi PHP ?
==============

    * PHP fonctionne sur diverses plateformes (Windows, Linux, Unix, Mac OS X, etc.)
    * PHP est compatible avec presque tous les serveurs utilisés aujourd'hui (Apache, IIS, etc.)
    * PHP prend en charge un large éventail de bases de données
    * PHP est gratuit. Téléchargez-le à partir de la ressource PHP officielle : www.php.net
    * PHP est facile à apprendre et fonctionne efficacement côté serveur

Quoi de neuf en PHP 7
=====================

    * PHP 7 est beaucoup plus rapide que la précédente version stable populaire (PHP 5.6)
    * PHP 7 a amélioré la gestion des erreurs
    * PHP 7 prend en charge des déclarations de type plus strictes pour les arguments de fonction
    * PHP 7 prend en charge de nouveaux opérateurs (comme l'opérateur de vaisseau spatial : <=>)
    

Installation de PHP
===================
 
De quoi ai-je besoin?
.....................

Pour commencer à utiliser PHP, vous pouvez :

    * Trouver un hébergeur avec support PHP et MySQL
    * Installez un serveur Web sur votre propre PC, puis installez PHP et MySQL

Utiliser un hébergeur avec support PHP
......................................

Si votre serveur a activé la prise en charge de PHP, vous n'avez rien à faire. Créez simplement des fichiers .php, placez-les dans votre répertoire Web et le serveur les analysera automatiquement pour vous. Vous n'avez pas besoin de compiler quoi que ce soit ou d'installer des outils supplémentaires. Parce que PHP est gratuit, la plupart des hébergeurs proposent un support PHP.


Configurer PHP sur votre propre PC
..................................

Cependant, si votre serveur ne supporte pas PHP, vous devez :

    * installer un serveur web
    * installer PHP
    * installer une base de données, telle que MySQL

Le site Web officiel de PHP (PHP.net) contient des instructions d'installation pour PHP : http://php.net/manual/en/install.php
Compilateur/éditeur PHP en ligne

.. code-block::php

    <?php
        $txt = "PHP" ;
        echo "J'aime $txt !";
   ?>

Syntaxe de PHP
--------------

Un script PHP est exécuté sur le serveur et le résultat HTML brut est renvoyé au navigateur.

Syntaxe PHP de base
===================

Un script PHP peut être placé n'importe où dans le document.

Un script PHP commence par `<?php` et se termine par `?>` :

.. code-block:: php

    <?php
        // Le code PHP va ici
    ?>

L'extension de fichier par défaut pour les fichiers PHP est `.php`.

Un fichier PHP contient normalement des balises HTML et du code de script PHP. Ci-dessous, nous avons un exemple de fichier PHP simple, avec un script PHP qui utilise une fonction PHP intégrée "echo" pour afficher le texte "Hello World!" sur une page Web :

.. code-block:: php

    <!DOCTYPE html>
         <html>
            <body>
                <h1>Ma première page PHP</h1>
                    <?php
                         echo "Bonjour tout le monde !";
                   ?>

           </body>
           

.. note:: les instructions PHP se terminent par un point-virgule (;).

Sensibilité à la casse PHP
..........................

En PHP, les mots-clés (par exemple, if, else, while, echo, etc.), les classes, les fonctions et les fonctions définies par l'utilisateur ne sont pas sensibles à la casse.

Dans l'exemple ci-dessous, les trois instructions echo ci-dessous sont égales et légales :

.. code-block:: php

    <!DOCTYPE html>
        <html>
           <body>

              <?php
                   ECHO "Bonjour tout le monde !<br>" ;
                   echo "Bonjour tout le monde !<br>" ;
                   EcHo "Bonjour tout le monde !<br>" ;
             ?>
         </body>
      </html>

.. note:: Cependant ; tous les noms de variables sont sensibles à la casse !

Regardez l'exemple ci-dessous; seule la première instruction affichera la valeur de la variable $color ! En effet, $color, $COLOR et $coLOR sont traités comme trois variables différentes :

.. code-block:: php

    <!DOCTYPE html>
       <html>
          <body>
              <?php
                 $color = "rouge" ;
                 echo "Ma voiture est". $color. "<br>" ;
                 echo "Ma maison est " . $COLOR. "<br>" ;
                 echo "Mon bateau est " . $coLOR. "<br>" ;
             ?>
        </body>
     </html>
     
     
Exercices PHP
.............


Insérez la partie manquante du code ci-dessous pour afficher "Bonjour le Monde".

.. code-block:: php

   "Bonjour le monde";
   
   

Commentaires en PHP
===================

Un commentaire dans le code PHP est une ligne qui n'est pas exécutée dans le cadre du programme. Son seul but est d'être lu par quelqu'un qui regarde le code.

Les commentaires peuvent être utilisés pour :

    * Laisser les autres comprendre votre code
    * Vous rappeler ce que vous avez fait - La plupart des programmeurs ont eu l'habitude de revenir à leur propre travail un an ou deux plus tard et d'avoir à repenser ce qu'ils ont fait. Les commentaires peuvent vous rappeler ce que vous pensiez lorsque vous avez écrit le code

PHP prend en charge plusieurs manières de commenter.


Syntaxe pour les commentaires sur une seule ligne :

.. code-block:: php

    <!DOCTYPE html>
    <html>
         <body>
            <?php
                  // Ceci est un commentaire sur une seule ligne
                  # Ceci est également un commentaire sur une seule ligne
           ?>
        </body>
   </html>

Syntaxe pour les commentaires sur plusieurs lignes :

.. code-block:: php

    <!DOCTYPE html>
    <html>
       <body>
         <?php
             /*
               Ceci est un bloc de commentaires de plusieurs lignes
               qui s'étend sur plusieurs
               lignes
             */
        ?>
     </body>
   </html>

Utiliser des commentaires pour omettre des parties du code :

.. code-block:: php

    <!DOCTYPE html>
        <html>
       <body>
          <?php
             // Vous pouvez également utiliser des commentaires pour omettre des parties d'une ligne de code
             $x = 5 /* + 15 */ + 5;
             echo $x;
         ?>
      </body>
     </html>
     
     
Pour plus d'information visitez https://fr.wikibooks.org/wiki/Programmation_PHP

Les formulaires en PHP
======================

Les superglobales PHP `$_GET` et `$_POST` sont utilisées pour collecter des données de formulaire.

PHP - Un formulaire HTML simple
...............................


L'exemple ci-dessous affiche un formulaire HTML simple avec deux champs de saisie et un bouton d'envoi :

.. code-block:: php

      <!DOCTYPE html>
        <html>
        <body>
          <form action="bienvenue.php" method="post">
              Nom : <input type="text" name="name"><br>
              Courriel : <input type="text" name="email"><br>
              <input type="submit">
          </form>
         </body>
       </html>

Lorsque l'utilisateur remplit le formulaire ci-dessus et clique sur le bouton `Soumettre`, les données du formulaire sont envoyées pour traitement dans un fichier PHP nommé "bienvenue.php". Les données du formulaire sont envoyées avec la méthode `HTTP POST`.

Pour afficher les données soumises, vous pouvez simplement faire `echo` à toutes les variables. Le fichier "bienvenue.php" ressemble à ceci :

.. code-block:: php

    <!DOCTYPE html>
        <html>
            <body>
                Bienvenue <?php echo $_POST["name"]; ?><br>
                Votre adresse e-mail est : <?php echo $_POST["email"] ; ?>
            </body>
       </html>

La sortie pourrait être quelque chose comme ceci :

.. note:: Bienvenue Jean Votre adresse e-mail est john.doe@example.com

Le même résultat pourrait également être obtenu en utilisant la méthode HTTP GET :


.. code-block:: php

    <html>
       <body>
           <form action="welcome_get.php" method="get">
               Nom : <input type="text" name="name"><br>
               Courriel : <input type="text" name="email"><br>
               <input type="submit">
          </form>
      </body>
   </html>


et "welcome_get.php" ressemble à ceci :

.. code-block:: php

      <html>
          <body>
              Bienvenue <?php echo $_GET["name"]; ?><br>
              Votre adresse e-mail est : <?php echo $_GET["email"] ; ?>
          </body>
     </html>


Le code ci-dessus est assez simple. Cependant, il manque le plus important. Vous devez valider les données du formulaire pour protéger votre script des codes malveillants.

Pensez SÉCURITÉ lors du traitement des formulaires PHP !

Cette page ne contient aucune validation de formulaire, elle montre simplement comment vous pouvez envoyer et récupérer des données de formulaire.

Cependant, les pages suivantes montreront comment traiter les formulaires PHP en gardant à l'esprit la sécurité ! Une validation correcte des données du formulaire est importante pour protéger votre formulaire des pirates et des spammeurs !


GET vs POST
...........

GET et POST créent tous deux un tableau (par exemple, array( key1 => value1, key2 => value2, key3 => value3, ...)). Ce tableau contient des paires clé/valeur, où les clés sont les noms des contrôles de formulaire et les valeurs sont les données d'entrée de l'utilisateur.

GET et POST sont tous deux traités comme `$_GET` et `$_POST`. Ce sont des superglobales, ce qui signifie qu'elles sont toujours accessibles, quelle que soit la portée - et vous pouvez y accéder à partir de n'importe quelle fonction, classe ou fichier sans avoir à faire quoi que ce soit de spécial.

`$_GET` est un tableau de variables passé au script courant via les paramètres d'URL.

`$_POST` est un tableau de variables passé au script courant via la méthode HTTP POST.


Quand utiliser GET ?
....................

Les informations envoyées depuis un formulaire avec la méthode GET sont visibles par tous (tous les noms et valeurs des variables sont affichés dans l'URL). GET a également des limites sur la quantité d'informations à envoyer. La limitation est d'environ 2000 caractères. Cependant, comme les variables sont affichées dans l'URL, il est possible de mettre la page en signet. Cela peut être utile dans certains cas.

GET peut être utilisé pour envoyer des données non sensibles.

.. note:: GET ne doit JAMAIS être utilisé pour envoyer des mots de passe ou d'autres informations sensibles !


Quand utiliser POST ?
.....................

Les informations envoyées à partir d'un formulaire avec la méthode POST sont invisibles pour les autres (tous les noms/valeurs sont intégrés dans le corps de la requête HTTP) et n'ont aucune limite sur la quantité d'informations à envoyer.

De plus, POST prend en charge des fonctionnalités avancées telles que la prise en charge de l'entrée binaire en plusieurs parties lors du téléchargement de fichiers sur le serveur.

Cependant, comme les variables ne sont pas affichées dans l'URL, il n'est pas possible de mettre la page en signet.

Les développeurs préfèrent POST pour envoyer des données de formulaire.

Ensuite, voyons comment nous pouvons traiter les formulaires PHP de manière sécurisée !


Exercices PHP
.............


Si le formulaire suivant est soumis, comment pouvez-vous, dans welcome.php, afficher la valeur du champ "fname" ?

.. code-block:: php

    <form action="welcome.php" method="get">
        Prénom : <input type="text" name="fname">
    </form>
    

    <html>
      <body>
            Bienvenue <?php echo ____________ ; ?>
       </body>
    </html>



Validation de formulaire PHP
============================

.. Note:: Pensez SÉCURITÉ lors du traitement des formulaires PHP !

Cette section montre comment traiter les formulaires PHP en gardant à l'esprit la sécurité. 
Une validation correcte des données du formulaire est importante pour protéger votre formulaire des pirates et des spammeurs !

Le formulaire HTML sur lequel nous allons travailler dans ces chapitres contient divers champs de saisie : 

* des champs de texte obligatoires et facultatifs, 
* des boutons radio et un bouton d'envoi 

Les règles de validation du formulaire sont les suivantes :

Règles de validation de champ
* Nom (obligatoire. + Ne doit contenir que des lettres et des espaces
* Email (requis. + Doit contenir une adresse email valide (avec @ et .)
* Site Internet (optionnel. S'il est présent, il doit contenir une URL valide
* Commentaire Facultatif. Champ de saisie multiligne (zone de texte)
* Sexe requis. Doit en sélectionner un

Tout d'abord, nous allons examiner le code HTML brut du formulaire :

Les champs nom, e-mail et site Web sont des éléments de saisie de texte et le champ de commentaire est une zone de texte. Le code HTML ressemble à ceci :

.. code-block:: html

    Nom : <input type="text" name="name">
    Courriel : <input type="text" name="email">
    Site Web : <input type="text" name="website">
    Commentaire : <textarea name="comment" rows="5" cols="40"></textarea>


Boutons radio

Les champs du genre sont des boutons radio et le code HTML ressemble à ceci :
Genre:

.. code-block:: html

    <input type="radio" name="gender" value="female">Femme
    <input type="radio" name="gender" value="male">Homme
    <input type="radio" name="gender" value="other">Autre
    
L'élément de formulaire

Le code HTML du formulaire ressemble à ceci :

.. code-block:: php

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Lorsque le formulaire est soumis, les données du formulaire sont envoyées avec method="post".

Qu'est-ce que la variable $_SERVER["PHP_SELF"] ?
................................................


Le $_SERVER["PHP_SELF"] est une variable super globale qui renvoie le nom de fichier du script en cours d'exécution.

Ainsi, le $_SERVER["PHP_SELF"] envoie les données du formulaire soumis à la page elle-même, au lieu de passer à une autre page. De cette façon, l'utilisateur obtiendra des messages d'erreur sur la même page que le formulaire.

Qu'est-ce que la fonction htmlspecialchars() ?
..............................................

La fonction htmlspecialchars() convertit les caractères spéciaux en entités HTML. Cela signifie qu'il remplacera les caractères HTML tels que < et > par &lt; et &gt;. Cela empêche les attaquants d'exploiter le code en injectant du code HTML ou Javascript (attaques de type "Cross-site Scripting") dans les formulaires.


.. Note:: Grande note sur la sécurité des formulaires PHP

   La variable $_SERVER["PHP_SELF"] peut être utilisée par des hackers ! Si PHP_SELF est utilisé dans votre page, un utilisateur peut saisir une barre oblique (/) puis des commandes de Cross Site Scripting (XSS) à exécuter.


.. Note:: Les scripts intersites (XSS) sont un type de vulnérabilité de sécurité informatique que l'on trouve généralement dans les applications Web. XSS permet aux attaquants d'injecter un script côté client dans des pages Web consultées par d'autres utilisateurs.

Supposons que nous ayons le formulaire suivant dans une page nommée "test_form.php":

.. code-block:: php

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

Maintenant, si un utilisateur entre l'URL normale dans la barre d'adresse comme "http://www.example.com/test_form.php", le code ci-dessus sera traduit en :

.. code-block:: html

    <form method="post" action="test_form.php">

Jusqu'ici tout va bien.

Cependant, considérez qu'un utilisateur saisit l'URL suivante dans la barre d'adresse :
http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert('piraté')%3C/script%3E

Dans ce cas, le code ci-dessus sera traduit en :

.. code-block:: html

    <form method="post" action="test_form.php/"><script>alerte('piraté')</script>

Ce code ajoute une balise de script et une commande d'alerte. Et lorsque la page se charge, le code JavaScript sera exécuté (l'utilisateur verra une boîte d'alerte). Ceci est juste un exemple simple et inoffensif de la façon dont la variable PHP_SELF peut être exploitée.

Sachez que n'importe quel code JavaScript peut être ajouté à l'intérieur de la balise <script> ! Un pirate peut rediriger l'utilisateur vers un fichier sur un autre serveur, et ce fichier peut contenir un code malveillant qui peut modifier les variables globales ou soumettre le formulaire à une autre adresse pour enregistrer les données de l'utilisateur, par exemple.


Comment éviter les exploits de $_SERVER["PHP_SELF"] ?
.....................................................

Les exploits $_SERVER["PHP_SELF"] peuvent être évités en utilisant la fonction htmlspecialchars().

Le code du formulaire devrait ressembler à ceci :

.. code-block:: php

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

La fonction htmlspecialchars() convertit les caractères spéciaux en entités HTML. Maintenant, si l'utilisateur essaie d'exploiter la variable PHP_SELF, cela entraînera la sortie suivante :

.. code-block:: html

    <form method="post" action="test_form.php/&quot;&gt;&lt;script&gt;alert('piraté')&lt;/script&gt;">

La tentative d'exploit échoue, et aucun mal n'est fait !


Valider les données de formulaire avec PHP
..........................................

La première chose que nous allons faire est de passer toutes les variables via la fonction htmlspecialchars() de PHP.

Lorsque nous utilisons la fonction htmlspecialchars(); puis si un utilisateur essaie de soumettre ce qui suit dans un champ de texte :

.. code-block:: html

    <script>location.href('http://www.hacked.com')</script>

- cela ne serait pas exécuté, car il serait enregistré en tant que code HTML échappé, comme ceci :

.. code-block:: html

    &lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;

Le code peut désormais être affiché en toute sécurité sur une page ou dans un e-mail.

Nous ferons également deux autres choses lorsque l'utilisateur soumettra le formulaire :

    * Supprimez les caractères inutiles (espace supplémentaire, tabulation, nouvelle ligne) des données d'entrée utilisateur (avec la fonction PHP trim())
    * Supprimer les barres obliques inverses (\) des données d'entrée utilisateur (avec la fonction PHP stripslashes())

L'étape suivante consiste à créer une fonction qui effectuera toute la vérification pour nous (ce qui est beaucoup plus pratique que d'écrire le même code encore et encore).

Nous nommerons la fonction test_input().

Maintenant, nous pouvons vérifier chaque variable $_POST avec la fonction test_input(), et le script ressemble à ceci :

.. code-block:: php

    
    <?php
        // définir les variables et définir des valeurs vides
        $name = $email = $gender = $comment = $website = "" ;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = test_input($_POST["nom"]);
            $email = test_input($_POST["email"]);
            $site_Web = test_input($_POST["site_Web"]);
            $commentaire = test_input($_POST["commentaire"]);
            $genre = test_input($_POST["genre"]);
        }

        fonction test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            renvoie $data ;
       }
    ?>

Notez qu'au début du script, nous vérifions si le formulaire a été soumis en utilisant $_SERVER["REQUEST_METHOD"]. Si REQUEST_METHOD est POST, alors le formulaire a été soumis - et il doit être validé. S'il n'a pas été soumis, ignorez la validation et affichez un formulaire vierge.

Cependant, dans l'exemple ci-dessus, tous les champs de saisie sont facultatifs. Le script fonctionne bien même si l'utilisateur n'entre aucune donnée.

L'étape suivante consiste à rendre les champs de saisie obligatoires et à créer des messages d'erreur si nécessaire.


PHP - Champs obligatoires
.........................

Les champs "Nom", "E-mail" et "Sexe" sont obligatoires. Ces champs ne peuvent pas être vides et doivent être remplis dans le formulaire HTML.


Dans le code suivant, nous avons ajouté de nouvelles variables : $nameErr, $emailErr, $genderErr et $websiteErr. Ces variables d'erreur contiendront des messages d'erreur pour les champs requis. Nous avons également ajouté une instruction if else pour chaque variable $_POST. Ceci vérifie si la variable $_POST est vide (avec la fonction PHP empty()). S'il est vide, un message d'erreur est stocké dans les différentes variables d'erreur, et s'il n'est pas vide, il envoie les données d'entrée utilisateur via la fonction test_input() :

.. code-block:: php

   <?php
   // define variables and set to empty values
   $nameErr = $emailErr = $genderErr = $websiteErr = "";
   $name = $email = $gender = $comment = $website = "";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
    $nameErr = "Name is required";
   } else {
    $name = test_input($_POST["name"]);
   }

   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
   } else {
    $email = test_input($_POST["email"]);
   }

   if (empty($_POST["website"])) {
    $website = "";
   } else {
    $website = test_input($_POST["website"]);
   }

   if (empty($_POST["comment"])) {
    $comment = "";
   } else {
    $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
   } else {
    $gender = test_input($_POST["gender"]);
   }
   }
   ?>


PHP - Afficher les messages d'erreur
....................................

Ensuite dans le formulaire HTML, nous ajoutons un petit script après chaque champ obligatoire, qui génère le message d'erreur correct si besoin (c'est-à-dire si l'utilisateur essaie de soumettre le formulaire sans remplir les champs obligatoires) :
Exemple

.. code-block:: php

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail:
  <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website:
  <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  </form> 

L'étape suivante consiste à valider les données d'entrée, c'est-à-dire « Le champ Nom ne contient-il que des lettres et des espaces ? » et « Le champ E-mail contient-il une syntaxe d'adresse e-mail valide ? », et s'il est rempli, " Le champ Site Web contient-il une URL valide ?".

.. code-block:: php

  <?php
  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  }
  ?>

L'étape suivante consiste à montrer comment empêcher le formulaire de vider tous les champs de saisie lorsque l'utilisateur soumet le formulaire.


.. code-block:: php

    <html>
    <body>
       Name: <input type="text" name="name" value="<?php echo $name;?>">
       E-mail: <input type="text" name="email" value="<?php echo $email;?>">
       Website: <input type="text" name="website" value="<?php echo $website;?>">
       Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
       Gender:
       <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
       <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
       <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
    </body>
    </html>
        

Base de données MySQL
.....................

Avec PHP, vous pouvez vous connecter et manipuler des bases de données.

MySQL est le système de base de données le plus populaire utilisé avec PHP.

Qu'est-ce que MySQL ?
.....................

    * MySQL est un système de base de données utilisé sur le Web
    * MySQL est un système de base de données qui s'exécute sur un serveur
    * MySQL est idéal pour les petites et les grandes applications
    * MySQL est très rapide, fiable et facile à utiliser
    * MySQL utilise le SQL standard
    * MySQL compile sur un certain nombre de plates-formes
    * MySQL est gratuit à télécharger et à utiliser
    * MySQL est développé, distribué et pris en charge par Oracle Corporation
    * MySQL porte le nom de la fille du co-fondateur Monty Widenius : My

Les données d'une base de données MySQL sont stockées dans des tables. Une table est une collection de données connexes et se compose de colonnes et de lignes.

Les bases de données sont utiles pour stocker des informations de manière catégorique. Une entreprise peut avoir une base de données avec les tables suivantes :

    * Employés
    * Produits
    * Clients
    * Commandes

Système de base de données PHP + MySQL
......................................

    PHP combiné à MySQL est multiplateforme (vous pouvez développer sous Windows et servir sur une plate-forme Unix)


Requêtes de base de données
...........................

Une requête est une question ou une demande.

Nous pouvons interroger une base de données pour obtenir des informations spécifiques et obtenir un jeu d'enregistrements renvoyé.

Regardez la requête suivante (en utilisant le SQL standard) :

.. code-block:: sql
   
   SELECT Nom de famille FROM Employés

La requête ci-dessus sélectionne toutes les données de la colonne "Nom" de la table "Employés".


Télécharger la base de données MySQL
....................................

Si vous n'avez pas de serveur PHP avec une base de données MySQL, vous pouvez le télécharger gratuitement ici : http://www.mysql.com


Faits sur la base de données MySQL
..................................

MySQL est le système de base de données standard de facto pour les sites Web avec d'énormes volumes de données et d'utilisateurs finaux (comme Facebook, Twitter et Wikipedia).

Un autre avantage de MySQL est qu'il peut être réduit pour prendre en charge les applications de base de données intégrées.

Regardez http://www.mysql.com/customers/ pour un aperçu des entreprises utilisant MySQL.


PHP: se connecter à MySQL
=========================

PHP 5 et les versions ultérieures peuvent fonctionner avec une base de données MySQL en utilisant :

    * Extension MySQLi (le "i" signifie amélioré)
    * PDO (objets de données PHP)

Les versions antérieures de PHP utilisaient l'extension MySQL. Cependant, cette extension a été dépréciée en 2012.

Dois-je utiliser MySQLi ou PDO ?
================================

Si vous avez besoin d'une réponse courte, ce serait "Tout ce que vous voulez".

MySQLi et PDO ont tous deux leurs avantages :

PDO fonctionnera sur 12 systèmes de bases de données différents, alors que MySQLi ne fonctionnera qu'avec les bases de données MySQL.

Ainsi, si vous devez changer de projet pour utiliser une autre base de données, PDO facilite le processus. Vous n'avez qu'à changer la chaîne de connexion et quelques requêtes. Avec MySQLi, vous devrez réécrire tout le code - requêtes incluses.

Les deux sont orientés objet, mais MySQLi propose également une API procédurale.

Les deux prennent en charge les déclarations préparées (requêtes préparées). Les instructions préparées protègent de l'injection SQL et sont très importantes pour la sécurité des applications Web.


Exemples MySQL dans la syntaxe MySQLi et PDO
============================================

Dans cette section et dans les section suivantes, nous montrons trois façons de travailler avec PHP et MySQL :

    * MySQLi (orienté objet)
    * MySQLi (procédural)
    * PDO

Installation de MySQLi
......................

Pour Linux et Windows : L'extension MySQLi est installée automatiquement dans la plupart des cas, lorsque le package php5 mysql est installé.

Pour plus de détails sur l'installation, allez sur : http://php.net/manual/en/mysqli.installation.php

Installation PDO
................

Pour plus de détails sur l'installation, allez sur : http://php.net/manual/en/pdo.installation.php

Ouvrir une connexion à MySQL
............................

Avant de pouvoir accéder aux données de la base de données MySQL, nous devons pouvoir nous connecter au serveur :

Exemple (MySQLi Object-Oriented)

.. code-block:: php

    <?php
      $servername = "localhost";
      $username = "username";
      $password = "password";

      // Create connection
      $conn = new mysqli($servername, $username, $password);

      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";
    ?> 

Exemple (MySQLi Procedural)

.. code-block:: php

    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
   ?>
   
   
Exemple PDO

.. code-block:: php

     <?php
     $servername = "localhost";
     $username = "username";
     $password = "password";

     try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
       // set the PDO error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected successfully";
      } catch(PDOException $e) {
       echo "Connection failed: " . $e->getMessage();
        }
    ?>  
    
 
Fermer la connexion
...................

La connexion sera fermée automatiquement à la fin du script. Pour fermer la connexion avant, utilisez ce qui suit :

MySQLi Object-Oriented:

.. code-block:: php

    $conn->close(); 

MySQLi Procedural:

.. code-block:: php

    mysqli_close($conn); 

PDO:

.. code-block:: php

    $conn = null; 


Créer une base de données MySQL en utilisant MySQLi et PDO
==========================================================

L'instruction CREATE DATABASE est utilisée pour créer une base de données dans MySQL.

Les exemples suivants créent une base de données nommée "myDB" :

Exemple (MySQLi Object-oriented)

.. code-block:: php

    <?php
     $servername = "localhost";
     $username = "username";
     $password = "password";

     // Create connection
     $conn = new mysqli($servername, $username, $password);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }

     // Create database
     $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
  ?> 


Exemple (MySQLi Procedural)

.. code-block:: php

    <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Create database
        $sql = "CREATE DATABASE myDB";
        if (mysqli_query($conn, $sql)) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>


Exemple (PDO)

.. code-block:: php

     <?php
          $servername = "localhost";
          $username = "username";
          $password = "password";

          try {
                $conn = new PDO("mysql:host=$servername", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "CREATE DATABASE myDBPDO";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "Database created successfully<br>";
          } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
          }

          $conn = null;
    ?> 


Créer une table MySQL en utilisant MySQLi et PDO
================================================

L'instruction CREATE TABLE est utilisée pour créer une table dans MySQL.

.. code-block:: sql

    CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) 

Nous allons créer une table nommée "MyGuests", avec cinq colonnes : "id", "firstname", "lastname", "email" et "reg_date":


Exemple (MySQLi Object-oriented)

.. code-block:: php

     <?php
         $servername = "localhost";
         $username = "username";
         $password = "password";
         $dbname = "myDB";

         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);
         // Check connection
         if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
         }

         // sql to create table
         $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";

      if ($conn->query($sql) === TRUE) {
          echo "Table MyGuests created successfully";
      } else {
          echo "Error creating table: " . $conn->error;
      }

      $conn->close();
   ?>


Exemple (MySQLi Procedural)

.. code-block:: php

    <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // sql to create table
        $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if (mysqli_query($conn, $sql)) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?> 



Exemple (PDO)

.. code-block:: php

    <?php
         $servername = "localhost";
         $username = "username";
         $password = "password";
         $dbname = "myDBPDO";

         try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              // sql to create table
              $sql = "CREATE TABLE MyGuests (
                 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                 firstname VARCHAR(30) NOT NULL,
                 lastname VARCHAR(30) NOT NULL,
                 email VARCHAR(50),
                 reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
              )";

              // use exec() because no results are returned
              $conn->exec($sql);
              echo "Table MyGuests created successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        } 

        $conn = null;
     ?>


Insérer des données dans MySQL à l'aide de MySQLi et PDO
========================================================

Une fois qu'une base de données et une table ont été créées, nous pouvons commencer à y ajouter des données.

Voici quelques règles de syntaxe à suivre :

     * La requête SQL doit être entre guillemets en PHP
     * Les valeurs de chaîne à l'intérieur de la requête SQL doivent être entre guillemets
     * Les valeurs numériques ne doivent pas être  entre guillemets
     * Le mot NULL ne doit pas être entre guillemets
     


L'instruction INSERT INTO est utilisée pour ajouter de nouveaux enregistrements à une table MySQL :

.. code-block:: sql

   INSERT INTO table_name (column1, column2, column3,...)
   VALUES (value1, value2, value3,...) 


Exemple (MySQLi Object-oriented)

.. code-block:: php

    <?php
         $servername = "localhost";
         $username = "username";
         $password = "password";
         $dbname = "myDB";

         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);
         // Check connection
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }

         $sql = "INSERT INTO MyGuests (firstname, lastname, email)
         VALUES ('John', 'Doe', 'john@example.com')";

         if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }

         $conn->close();
   ?> 


Exemple (MySQLi Procedural)

.. code-block:: php

    <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
             VALUES ('John', 'Doe', 'john@example.com')";

        if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
        } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>


Exemple (PDO)

.. code-block:: php


    <?php
         $servername = "localhost";
         $username = "username";
         $password = "password";
         $dbname = "myDBPDO";

         try {
             $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
             // set the PDO error mode to exception
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                 VALUES ('John', 'Doe', 'john@example.com')";
             // use exec() because no results are returned
             $conn->exec($sql);
             echo "New record created successfully";
        } catch(PDOException $e) {
             echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    ?> 


Requêtes préparées et paramètres liés
=====================================

Une requête préparée est une fonctionnalité utilisée pour exécuter les mêmes instructions SQL (ou similaires) à plusieurs reprises avec une grande efficacité.

Les requêtes préparées fonctionnent essentiellement comme ceci :

    * Préparer : un modèle d'instruction SQL est créé et envoyé à la base de données. Certaines valeurs sont laissées non spécifiées, appelées paramètres (étiquetées " ?"). Exemple : INSERT INTO MyGuests VALUES(?, ?, ?)
    * La base de données analyse, compile et exécute l'optimisation des requêtes sur le modèle d'instruction SQL et stocke le résultat sans l'exécuter
    * Exécuter : ultérieurement, l'application lie les valeurs aux paramètres et la base de données exécute l'instruction. 
    
    L'application peut exécuter l'instruction autant de fois qu'elle le souhaite avec des valeurs différentes

Par rapport à l'exécution directe d'instructions SQL, les instructions préparées présentent trois avantages principaux :

    * Les requêtes préparées réduisent le temps d'analyse car la préparation de la requête n'est effectuée qu'une seule fois (bien que l'instruction soit exécutée plusieurs fois)
    * Les paramètres liés minimisent la bande passante vers le serveur car vous devez envoyer uniquement les paramètres à chaque fois, et non la requête entière
    * Les requêtes préparées sont très utiles contre les injections SQL, car les valeurs des paramètres, qui sont transmises ultérieurement à l'aide d'un protocole différent, n'ont pas besoin d'être correctement échappées. Si le modèle d'instruction d'origine n'est pas dérivé d'une entrée externe, l'injection SQL ne peut pas se produire.
    
    
Exemple (MySQLi with Prepared Statements)

.. code-block:: php

    <?php
         $servername = "localhost";
         $username = "username";
         $password = "password";
         $dbname = "myDB";

         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }

         // prepare and bind
         $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
         $stmt->bind_param("sss", $firstname, $lastname, $email);

         // set parameters and execute
         $firstname = "John";
         $lastname = "Doe";
         $email = "john@example.com";
         $stmt->execute();

         $firstname = "Mary";
         $lastname = "Moe";
         $email = "mary@example.com";
         $stmt->execute();

         $firstname = "Julie";
         $lastname = "Dooley";
         $email = "julie@example.com";
         $stmt->execute();

         echo "New records created successfully";

         $stmt->close();
         $conn->close();
    ?>



Exemple (PDO with Prepared Statements)

.. code-block:: php

    <?php
       $servername = "localhost";
       $username = "username";
       $password = "password";
       $dbname = "myDBPDO";

       try {
           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           // set the PDO error mode to exception
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           // prepare sql and bind parameters
           $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
           VALUES (:firstname, :lastname, :email)");
           $stmt->bindParam(':firstname', $firstname);
           $stmt->bindParam(':lastname', $lastname);
           $stmt->bindParam(':email', $email);

           // insert a row
           $firstname = "John";
           $lastname = "Doe";
           $email = "john@example.com";
           $stmt->execute();

           // insert another row
           $firstname = "Mary";
           $lastname = "Moe";
           $email = "mary@example.com";
           $stmt->execute();

            // insert another row
            $firstname = "Julie";
           $lastname = "Dooley";
           $email = "julie@example.com";
           $stmt->execute();

           echo "New records created successfully";
           } catch(PDOException $e) {
               echo "Error: " . $e->getMessage();
           }
           $conn = null;
         ?>


Sélectionnez les données d'une base de données MySQL
====================================================

L'instruction SELECT permet de sélectionner des données dans une ou plusieurs tables :

SELECT column_name(s) FROM table_name 

ou nous pouvons utiliser le caractère * pour sélectionner TOUTES les colonnes d'une table :

SELECT * FROM nom_table

Example (MySQLi Object-oriented)

.. code-block:: php

   <?php
      $servername = "localhost";
      $username = "username";
      $password = "password";
      $dbname = "myDB";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT id, firstname, lastname FROM MyGuests";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
           echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
      } else {
         echo "0 results";
      }
      $conn->close();
      ?>


Exemple (MySQLi Procedural)

.. code-block:: php

   <?php
      $servername = "localhost";
      $username = "username";
      $password = "password";
      $dbname = "myDB";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }

       $sql = "SELECT id, firstname, lastname FROM MyGuests";
       $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
       } else {
            echo "0 results";
       }

       mysqli_close($conn);
    ?> 
