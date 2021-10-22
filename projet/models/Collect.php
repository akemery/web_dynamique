<?php
    require_once('./../controllers/connect.php');

class Collect {


    /**
     * @param request
     * store data
     */
    public function store($area, $purchase_date,$dechifrage_date,$culture_type,$lastname,$firstname,$telephone,$email,$address,
                        $type,$locality,$limit,$longitude_b1,$latitude_b1,$longitude_b2,$latitude_b2,$longitude_b3,$latitude_b3,$longitude_b4,$latitude_b4,$picture,$area_picture){
        $connect = new Connect();

        $use_connect = $connect->connect();

        // prepare request

        $sql = "INSERT INTO Collect(area,purchase_date,dechifrage_date,culture_type,lastname,firstname,telephone,
                email,adresse,type_area,locality,born_limit,picture,area_picture,longitude_b1,latitude_b1,longitude_b2,
                latitude_b2,longitude_b3,latitude_b3,longitude_b4,latitude_b4) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $request = $use_connect->prepare($sql);
        $execute = $request->execute(array($area,$purchase_date,$dechifrage_date,$culture_type,$lastname,$firstname,$telephone,
        $email,$address,$type,$locality,$limit,$picture,$area_picture,$longitude_b1,$latitude_b1,$longitude_b2,$latitude_b2,$longitude_b3,$latitude_b3,$longitude_b4,$latitude_b4));
        if ($execute) {
            return 'success';
        } else {
            return 'error';
        }
        
    }
}