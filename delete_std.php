<?php


include('dbcon.php');

$id = $_GET['id'];


$delete = "DELETE FROM hh_tbl WHERE id = $id";


if($conn->query($delete) === TRUE)
{

echo '<script> window.location = "index.php"; </script>';


}

else 
{
    echo '<script> alert("Error While Deleting Record"); </script>';

}

$conn->close();



?>