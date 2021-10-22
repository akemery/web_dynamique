<?php
	

  // On vérifie que la méthode utilisée est correcte
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    // On inclut les fichiers  d'accès aux données
    require('./../models/Localisation.php');

    // On instancie le fichier de données
    $localisation = new Localisation();

    // On récupère les données
    $localisations = $localisation->getAllLocalisation();
   
    // On vérifie si on a au moins 1 agence
    if(count($localisations) > 0){

        // On initialise un tableau associatif
        $tableauLocalisation = [];
        // $all = $localisations->fetchAll(\PDO::FETCH_ASSOC);
        // var_dump($all);
        // On parcourt les agences
        
        foreach($localisations as $key => $row){
            
            $agen = [
                "longitude_b1"      => $row['longitude_b1'],
                "latitude_b1"       => $row['latitude_b1'],
                "longitude_b2"      => $row['longitude_b2'],
                "latitude_b2"       => $row['latitude_b2'],
                "longitude_b3"      => $row['longitude_b3'],
                "latitude_b3"       => $row['latitude_b3'],
                "longitude_b4"      => $row['longitude_b4'],
                "latitude_b4"       => $row['latitude_b4'],
            ];

            $tableauLocalisation = $agen;
        }
        
        //On envoie le code réponse 200 OK
        http_response_code(200);

        // On encode en json et on envoie
        echo json_encode($tableauLocalisation);
    }

}else{
    // On gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}