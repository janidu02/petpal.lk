<?php

session_start();
$email = $_SESSION["login"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "mypetpal";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $petType = $_POST['petType'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $additionalInfo = $_POST['additionalInfo'];
   
    
    $sql = "INSERT INTO book_appoinment (ID, petType, service, date, time, additionalInfo, email) VALUES ('', '$petType', '$service', '$date', '$time', '$additionalInfo', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> 
        alert('Registration Successful'); 
        window.location.href='displayAppoinment.php';
       </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>