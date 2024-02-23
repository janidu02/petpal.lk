<?php

require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["first-name"];
    $phonenumber = $_POST["phone-number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirm-password"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE  Email = '$email'");
  
  
    if(mysqli_num_rows($duplicate) != 0){
    echo
    "<script>  
    alert('Email Has Already Taken'); 
    window.location.href='../registor.html';
    </script>";
  }
  else{

    $sql = "INSERT INTO user (ID, username, Email, Phone , userpassword) VALUES('','$name','$email','$phonenumber','$password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script> 
        alert('Registration Successful'); 
        window.location.href='login.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


$conn->close();
    
  }
   
}

