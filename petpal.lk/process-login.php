<?php
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE  Email = '$email';");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){

    if($password == $row['userpassword']){
      session_start();
      $_SESSION["login"] = $email;
      header("Location: index.php");

    }
    else{
      echo
      "<script> 
      alert('Wrong Password'); 
      window.location.href='Login.php';
      </script>";
    }
  }
  else{
    echo
    "<script> 
    alert('User Not Registered');
    window.location.href='Login.php'; 
    </script>";
  }
}
?>