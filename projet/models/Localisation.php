<?php

require('./../controllers/connect.php');

class Localisation{


    public function getAllLocalisation(){
        $connect = new Connect();
        try {
            $use_connect = $connect->connect();
            $sql         = "SELECT longitude_b1 , latitude_b1 , longitude_b2, latitude_b2 , longitude_b3, latitude_b3 , longitude_b4, latitude_b4 FROM Collect";
            $request     = $use_connect->query($sql);
            $request->execute();
            return $request->fetchAll() ;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}