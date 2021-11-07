<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
      if(isset($_POST["valider"]))
      {
        //identifiants mysql
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "web_dynamique";

        //récupération des données du formulaire
        $sup = $_POST["sup"];               
        $geo = $_POST["geo"];   

        $culture = $_POST["culture"];  
        $nom =  $_POST["nom"];  

        $adresse = $_POST["adresse"];  
        $tel = $_POST["tel"];  

        $email = $_POST["email"];  
        $type_titre = $_POST["type_titre"];    

        $photo_proprio = $_POST["photo_proprio"];  
        $photo_parcelle =  $_POST["photo_parcelle"];  

        $date_acquisition = $_POST["date_acquisition"];  
        $dernier_defrichage = $_POST["dernier_defrichage"];  

        $localite = $_POST["localite"]; 
        $limitrophe = $_POST["limitrophe"]; 
        
        //Ouvrir une nouvelle connexion au serveur MySQL
        $mysqli = new mysqli($host, $username, $password, $database);
        
        //Afficher toute erreur de connexion
        if ($mysqli->connect_error) {
            die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }  
      
        //préparer la requête d'insertion SQL
        $statement = $mysqli->prepare("INSERT INTO champs (sup, geo, culture, nom, adresse, tel, email, type_titre, photo_proprio, photo_parcelle, date_acquisition, dernier_defrichage, localite, limitrophe) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 

        //Associer les valeurs et exécuter la requête d'insertion
        $statement->bind_param('ss', $sup, $geo, $culture, $nom, $adresse, $tel, $email, $type_titre, $photo_proprio, $photo_parcelle, $date_acquisition, $dernier_defrichage, $localite, $limitrophe); 

        header('Location: ');
      }
  }
?>