PHP - Présentation AJAX
-----------------------

Qu'est-ce qu'AJAX ?
===================

AJAX = JavaScript et XML asynchrones.

AJAX est une technique de création de pages Web rapides et dynamiques.

AJAX permet aux pages Web d'être mises à jour de manière asynchrone en échangeant de petites quantités de données avec le serveur dans les coulisses. Cela signifie qu'il est possible de mettre à jour des parties d'une page Web, sans recharger la page entière.

Les pages Web classiques (qui n'utilisent pas AJAX) doivent recharger la page entière si le contenu devait changer.

Exemples d'applications utilisant AJAX : onglets Google Maps, Gmail, Youtube et Facebook.

AJAX est basé sur les normes Internet
=====================================

AJAX est basé sur les normes Internet et utilise une combinaison de :

     * Objet XMLHttpRequest (pour échanger des données de manière asynchrone avec un serveur)
     * JavaScript/DOM (pour afficher/interagir avec les informations)
     * CSS (pour styliser les données)
     * XML (souvent utilisé comme format de transfert de données)
     

AJAX et PHP
===========


Exemple

.. code-block:: html

   <html>
   <head>
      <script>
         function showHint(str) {
            if (str.length == 0) {
               document.getElementById("txtHint").innerHTML = "";
               return;
            } else {
               var xmlhttp = new XMLHttpRequest();
               xmlhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("txtHint").innerHTML = this.responseText;
               }
               };
               xmlhttp.open("GET", "gethint.php?q=" + str, true);
           xmlhttp.send();
         }
       }
     </script>
    </head>
   <body>

    <p><b>Start typing a name in the input field below:</b></p>
    <form action="">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
    </form>
    <p>Suggestions: <span id="txtHint"></span></p>
   </body>
   </html>

Explication du code :
.....................

Tout d'abord, vérifiez si le champ de saisie est vide (str.length == 0). Si c'est le cas, effacez le contenu de l'espace réservé txtHint et quittez la fonction.

Cependant, si le champ de saisie n'est pas vide, procédez comme suit :

     * Créer un objet XMLHttpRequest
     * Créer la fonction à exécuter lorsque la réponse du serveur est prête
     * Envoyez la demande à un fichier PHP (gethint.php) sur le serveur
     * Notez que le paramètre q est ajouté à l'url (gethint.php?q="+str)
     * Et la variable str contient le contenu du champ de saisie
     
     
Le fichier PHP - "gethint.php"
..............................

Le fichier PHP vérifie un tableau de noms et renvoie le(s) nom(s) correspondant(s) au navigateur :

.. code-block:: php

    <?php
       // Array with names
       $a[] = "Anna";
       $a[] = "Brittany";
       $a[] = "Cinderella";
       $a[] = "Diana";
       $a[] = "Eva";
       $a[] = "Fiona";
       $a[] = "Gunda";
       $a[] = "Hege";
       $a[] = "Inga";
       $a[] = "Johanna";
       $a[] = "Kitty";
       $a[] = "Linda";
       $a[] = "Nina";
       $a[] = "Ophelia";
       $a[] = "Petunia";
       $a[] = "Amanda";
       $a[] = "Raquel";
       $a[] = "Cindy";
       $a[] = "Doris";
       $a[] = "Eve";
       $a[] = "Evita";
       $a[] = "Sunniva";
       $a[] = "Tove";
       $a[] = "Unni";
       $a[] = "Violet";
       $a[] = "Liza";
       $a[] = "Elizabeth";
       $a[] = "Ellen";
       $a[] = "Wenche";
       $a[] = "Vicky";

       // get the q parameter from URL
       $q = $_REQUEST["q"];

       $hint = "";

       // lookup all hints from array if $q is different from ""
       if ($q !== "") {
          $q = strtolower($q);
          $len=strlen($q);
            foreach($a as $name) {
            if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
            $hint = $name;
          } else {
           $hint .= ", $name";
          }
        }
         }
      }

      // Output "no suggestion" if no hint was found or output correct values
      echo $hint === "" ? "no suggestion" : $hint;
      ?>


Exemple de base de données AJAX
===============================

AJAX peut être utilisé pour une communication interactive avec une base de données.
Exemple de base de données AJAX

L'exemple suivant montre comment une page Web peut récupérer des informations à partir d'une base de données avec AJAX :

Exemple expliqué

Dans l'exemple ci-dessus, lorsqu'un utilisateur sélectionne une personne dans la liste déroulante ci-dessus, une fonction appelée "showUser()" est exécutée.

La fonction est déclenchée par l'événement onchange.

Voici le code HTML :


Exemple

.. code-block:: php

   <html>
   <head>
   <script>
       function showUser(str) {
           if (str == "") {
             document.getElementById("txtHint").innerHTML = "";
             return;
           } else {
           var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
               document.getElementById("txtHint").innerHTML = this.responseText;
           }
       };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
        }
     }
    </script>
   </head>
   <body>

   <form>
       <select name="users" onchange="showUser(this.value)">
       <option value="">Select a person:</option>
       <option value="1">Peter Griffin</option>
       <option value="2">Lois Griffin</option>
       <option value="3">Joseph Swanson</option>
       <option value="4">Glenn Quagmire</option>
       </select>
   </form>
   <br>
   <div id="txtHint"><b>Person info will be listed here...</b></div>

   </body>
    </html>


Explication du code :

Tout d'abord, vérifiez si la personne est sélectionnée. Si aucune personne n'est sélectionnée (str == ""), effacez le contenu de txtHint et quittez la fonction. Si une personne est sélectionnée, procédez comme suit :

     Créer un objet XMLHttpRequest
     Créer la fonction à exécuter lorsque la réponse du serveur est prête
     Envoyer la demande à un fichier sur le serveur
     Notez qu'un paramètre (q) est ajouté à l'URL (avec le contenu de la liste déroulante)
     
     

Le fichier PHP
..............

La page sur le serveur appelée par le JavaScript ci-dessus est un fichier PHP appelé "getuser.php".

Le code source dans "getuser.php" exécute une requête sur une base de données MySQL et renvoie le résultat dans une table HTML :

.. code-block:: php

    <!DOCTYPE html>
    <html>
    <head>
       <style>
          table {
            width: 100%;
            border-collapse: collapse;
         }
         table, td, th {
            border: 1px solid black;
            padding: 5px;
         }

         th {text-align: left;}
      </style>
   </head>
   <body>

   <?php
       $q = intval($_GET['q']);
       $con = mysqli_connect('localhost','peter','abc123','my_db');
       if (!$con) {
           die('Could not connect: ' . mysqli_error($con));
       }
       mysqli_select_db($con,"ajax_demo");
       $sql="SELECT * FROM user WHERE id = '".$q."'";
       $result = mysqli_query($con,$sql);
       echo "<table>
       <tr>
           <th>Firstname</th>
           <th>Lastname</th>
           <th>Age</th>
           <th>Hometown</th>
           <th>Job</th>
       </tr>";
       while($row = mysqli_fetch_array($result)) {
               echo "<tr>";
               echo "<td>" . $row['FirstName'] . "</td>";
               echo "<td>" . $row['LastName'] . "</td>";
               echo "<td>" . $row['Age'] . "</td>";
               echo "<td>" . $row['Hometown'] . "</td>";
               echo "<td>" . $row['Job'] . "</td>";
               echo "</tr>";
       }
       echo "</table>";
       mysqli_close($con);
   ?>
   </body>
   </html>

Explication : Lorsque la requête est envoyée du JavaScript vers le fichier PHP, les événements suivants se produisent :

     * PHP ouvre une connexion à un serveur MySQL
     
     * La bonne personne est trouvée
     
     * Un tableau HTML est créé, rempli de données et renvoyé à l'espace réservé "txtHint"



