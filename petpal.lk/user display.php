<?php
include 'connect.php';

session_start();
$id = $_SESSION["login"];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User Details </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/petdetails.css">

</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="petcare1.png" height="150" width="150" alt="logo" title="shopping cart">My Petpal</a>
        </div>
        <div class="menu-icon">&#9776;</div>


        <ul class="menu">
        <li><a href="index.php" >Home</a></li>
      <li><a href="Our Services.html" >Our Services</a>          
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="Account.php">Account</a></li>
        </ul>

    </nav>



    <div class="container my-5">
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User_ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Type</th>
                    <th scope="col">User Age</th>
                    <th scope="col">Password</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>


                <?php

                $sql = "SELECT * FROM `user` WHERE Email='$id'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $ID = $row['ID'];
                        $name = $row['username'];
                        $phonenumber = $row['Email'];
                        $email = $row['Phone'];
                        $password = $row['userpassword'];

                        echo '<tr>
            <th scope="row">' . $ID . '</th>
            <td>' . $name . '</td>
            <td>' . $phonenumber . '</td>
            <td>' . $email . '</td>
            <td>' . $password . '</td>
            
            <td><button class = "btn btn-primary"><a href="user update.php?updateid='.$ID.'" class = "text-light">Update</a></button>

            <button class = "btn btn-danger"><a href="user delete.php?deleteid=' . $ID . '" class = "text-light">Delete</a></button></td>
          </tr>
          <tr>';
                    }
                }
                ?>


            </tbody>
        </table>

    </div>

<br><br>



</body>

</html>