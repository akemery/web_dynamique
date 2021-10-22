<?php
   require_once('./../models/Collect.php');

 //On envoie le code réponse 200 OK
//  http_response_code(200);
 // On encode en json et on envoie
//  echo json_encode($array);
$area               = htmlspecialchars($_POST['area']);
$purchase_date      = htmlspecialchars($_POST['purchase_date']);
$dechifrage_date    = htmlspecialchars($_POST['dechifrage_date']);
$culture_type       = htmlspecialchars($_POST['culture_type']);
$lastname           = htmlspecialchars($_POST['lastname']);
$firstname          = htmlspecialchars($_POST['firstname']);
$telephone          = htmlspecialchars($_POST['telephone']);
$email              = htmlspecialchars($_POST['email']);
$address            = htmlspecialchars($_POST['address']);
$type               = htmlspecialchars($_POST['type']);
$locality           = htmlspecialchars($_POST['locality']);
$limit              = htmlspecialchars($_POST['limit']);
$longitude_b1       = htmlspecialchars($_POST['longitude_b1']);
$latitude_b1        = htmlspecialchars($_POST['latitude_b1']);
$longitude_b2       = htmlspecialchars($_POST['longitude_b2']);
$latitude_b2        = htmlspecialchars($_POST['latitude_b2']);
$longitude_b3       = htmlspecialchars($_POST['longitude_b3']);
$latitude_b3        = htmlspecialchars($_POST['latitude_b3']);
$longitude_b4       = htmlspecialchars($_POST['longitude_b4']);
$latitude_b4        = htmlspecialchars($_POST['latitude_b4']);
$picture            = htmlspecialchars($_POST['picture']);
$area_picture       = htmlspecialchars($_POST['area_picute']);


if (isset($area) && isset($purchase_date) && isset($dechifrage_date) && isset($culture_type) && isset($lastname)
    && isset($firstname) && isset($telephone) && isset($email) && isset($address) && isset($type) &&
    isset($locality) && isset($limit) && isset($longitude_b1) && isset($latitude_b1) && isset($longitude_b2) && isset($latitude_b2)
    && isset($longitude_b3) && isset($latitude_b3) && isset($longitude_b4) && isset($latitude_b4) && isset($picture) && isset($area_picture)) {
    
    // Valid data
    if (filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $regex = "/(^\(?\+?([0-9]{3})\)?[-. ]?)?([0-9]{2})[-. ]?([0-9]{2})[-. ]?([0-9]{2})[-. ]?([0-9]{2})$/";
        if (preg_match($regex , $telephone)) {

            // Store infiormations
            $collet = new Collect();
            $save   = $collet->store($area , $purchase_date,$dechifrage_date,$culture_type,$lastname,$firstname,
                                    $telephone,$email,$address,$type,$locality,$limit,$longitude_b1,$latitude_b1,
                                    $longitude_b2,$latitude_b2,$longitude_b3,$latitude_b3,$longitude_b4,$latitude_b4,
                                    $picture,$area_picture);
            if ($save == 'success') {
                $message = 'New record created successfully';
                echo json_encode($message);
            } else {
                $message = 'Error';
                echo json_encode($message);
            }
            
        } else {
            $message = 'telephone incorrect';
            echo json_encode($message);
        }
    } else {
        $message = 'Email incorrect';
        echo json_encode($message);
    }
    
} else {
        $message = 'Data missing';
        echo json_encode($message);
}
