<?php

require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Request = $_POST['Request'];

    $sql = "INSERT INTO adoption (ID, Full_Name, Home_Address, Email, Phone, Request) VALUES ('', '$Name', '$Address', '$Email', '$Phone', '$Request')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> 
        alert('New record created successfully'); 
        window.location.href='../Adoption Request.html.html';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

