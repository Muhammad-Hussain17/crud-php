<?php


$host = "localhost";
$dbuser  = "root";
$dbpass = "";
$dbname = "hhhh";




$conn = new mysqli($host , $dbuser , $dbpass , $dbname) ;



if($conn->connect_error)

{


echo '<script> alert("Database Error"); </script>';


}



?>