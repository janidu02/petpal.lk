<?php
include 'connect.php';

session_start();
$email = $_SESSION["login"];

if (isset($_POST['submit'])) {
    $petName       = $_POST['petName'];
    $petType       = $_POST['petType'];
    $petAge        = $_POST['petAge'];
    $petBreed      = $_POST['petBreed'];


    $sql = "INSERT INTO `petdetails` (P_Name,P_Type,P_Age,Breed, email) 
        VALUES ('$petName','$petType','$petAge','$petBreed', '$email')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        //echo "Data insert Successfully";
        header('location:Account.php');
    } else {
        die(mysqli_error($conn));
    }
}
