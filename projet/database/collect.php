<?php 
require_once('./../controllers/connect.php');

$connect = new Connect();
$use_connect = $connect->connect();

// create table 
$sql     = "CREATE TABLE Collect(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            lastname varchar(30) not null, firstname varchar(30) not null ,
            area double not null, type_area varchar(30) not null ,
            email varchar(30) not null , telephone varchar(30) not null ,
            adresse varchar(30) not null , picture varchar(30) not null ,
            area_picture varchar(30) not null, purchase_date date not null ,
            dechifrage_date date not null , culture_type varchar(30) not null ,
            born_limit varchar(30) not null , locality varchar(30) not null ,
            longitude_b1 double not null , latitude_b1 double not null,
            longitude_b2 double not null , latitude_b2 double not null,
            longitude_b3 double not null , latitude_b3 double not null,
            longitude_b4 double not null , latitude_b4 double not null
        )";

$use_connect->exec($sql);

// close stream
$use_connect = null;

echo 'Table Collect created successfully' ;
