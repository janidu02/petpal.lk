<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mypetpal";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if(!$conn){
    die(mysqli_error($conn));
}
?>

