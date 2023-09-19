<?php

$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="localproj1";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Failed to Connect");
}

?>