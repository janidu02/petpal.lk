<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Details Display </title>
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
        <button class="btn btn-primary"> <a href="Pet Details.php" class="text-light"> Add Pet</a></button>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Pet_ID</th>
                    <th scope="col">Pet Name</th>
                    <th scope="col">Pet Type</th>
                    <th scope="col">Pet Age</th>
                    <th scope="col">Breed</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>


            <?php
$petid = $_GET["petid"];
$sql = "SELECT * FROM `petdetails` WHERE Pet_ID='$petid'";

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        $Pet_ID = $row["Pet_ID"];
        $P_Name = $row["P_Name"];
        $P_Type = $row["P_Type"];
        $P_Age = $row["P_Age"];
        $Breed = $row["Breed"];

        echo '<tr>
            <th scope="row">' . $Pet_ID . '</th>
            <td>' . $P_Name . '</td>
            <td>' . $P_Type . '</td>
            <td>' . $P_Age . '</td>
            <td>' . $Breed . '</td>
            <td>
                <button class="btn btn-primary"><a href="update.php?updateid=' . $Pet_ID . '" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="deletepet.php?deleteid=' . $Pet_ID . '" class="text-light">Delete</a></button>
            </td>
          </tr>
          <tr>';
    } else {
        echo "No rows found.";
    }

    $result->free(); // Free the result set
} else {
    echo "Error executing the query: " . $conn->error;
}
?>


            </tbody>
        </table>

    </div>

<br><br>



</body>

</html>