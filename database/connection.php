<?php
$servername ="localhost";
$username ="root";
$password ="";
$DBname = "medical_hubdb";

$connection = mysqli_connect($servername,$username,$password,$DBname);

if(!$connection){

    die(mysqli_connect_error());
}
//echo "database connected";

?>