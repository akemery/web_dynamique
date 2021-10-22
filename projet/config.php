<?php 

class Config{

   private $servername  = "localhost";
   private $user        = "root";   
   private $password    = "marcel";
   private $dbname      = "collect@db";

   public function getServerName(){
      return $this->servername;
   }

   public function getUser(){
      return $this->user ;
   }

   public function getPassword(){
      return $this->password ;
   }

   public function getDbName() {
      return $this->dbname;
   }
   
}