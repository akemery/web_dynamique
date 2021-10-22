<?php 
require_once('../config.php');

class Connect {
    
    // Connect to database
    public function connect() {
        $config     = new Config();
        $host       = $config->getServerName();
        $user       = $config->getUser();
        $password   = $config->getPassword();
        $dbname     = $config->getDbName();      
        try {
            $connect    = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

        return $connect ;
    }
}