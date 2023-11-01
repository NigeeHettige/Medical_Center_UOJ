<?php

$hostName = 'localhost';
$userName = 'root';
$password ="";
$dbName = 'medical_center';

$connection = mysqli_connect($hostName,$userName,$password,$dbName);
if(!$connection){
    die("Connection fail!".mysqli_connect_error());
}

?>