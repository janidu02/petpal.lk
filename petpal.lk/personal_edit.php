<?php
include 'connect.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve the updated values from the form
    $ID = $_POST['ID'];
    $name = $_POST["first-name"];
    $phonenumber = $_POST["phone-number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirm-password"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE  Email = '$email'");

    // Update the pet details in the database
    $sql = "UPDATE `user` SET username='$name', Email='$email', Phone='$phonenumber' , userpassword='$password' WHERE ID=$ID";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Updated Successfully";
        // Redirect to the desired page after updating the record
        header('Location: Account.php');
        exit;
    } else {
        die(mysqli_error($con));
    }

// Retrieve the pet details based on the provided ID
$ID = $_GET['updateid'];
$sql = "SELECT * FROM `user` WHERE ID=$ID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Check if a record was found
if (!$row) {
    echo "No record found for the given ID";
    exit;
}

// Display the form to update the pet details    
}
?>
