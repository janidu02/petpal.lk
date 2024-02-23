<?php
include 'connect.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve the updated values from the form
    $Pet_ID = $_POST['Pet_ID'];
    $P_Name = $_POST['P_Name'];
    $P_Type = $_POST['P_Type'];
    $P_Age = $_POST['P_Age'];
    $Breed = $_POST['Breed'];

    // Update the pet details in the database
    $sql = "UPDATE `petdetails` SET P_Name='$P_Name', P_Type='$P_Type', P_Age='$P_Age', Breed='$Breed' WHERE Pet_ID=$Pet_ID";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Updated Successfully";
        // Redirect to the desired page after updating the record
        header("Location:display.php?petid=$Pet_ID");
        exit;
    } else {
        die(mysqli_error($conn));
    }
}

// Retrieve the pet details based on the provided ID
$ID = $_GET['updateid'];
$sql = "SELECT * FROM `petdetails` WHERE Pet_ID=$ID";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Check if a record was found
if (!$row) {
    echo "No record found for the given ID";
    exit;
}

// Display the form to update the pet details
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Pet Details</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/petdetails.css">

</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="images/petcare1.png" height="150" width="150" alt="logo" title="shopping cart">My Petpal</a>
        </div>
        <div class="menu-icon">&#9776;</div>


        <ul class="menu">
        <li><a href="index.php" >Home</a></li>
         <li><a href="Our Services.html" >Our Services</a>          
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="Account.php">Account</a></li>
        </ul>
        

    </nav><br><br>
    <center>
        <h2>Update Pet Details</h2>
    </center>
    <br><br>
    <div class="box">
        <form method="POST" action="">
            <input type="hidden" name="Pet_ID" value="<?php echo $row['Pet_ID']; ?>">
            <label for="P_Name">Pet Name:</label>
            <input type="text" name="P_Name" value="<?php echo $row['P_Name']; ?>"><br><br>
            <label for="P_Type">Pet Type:</label>
            <input type="text" name="P_Type" value="<?php echo $row['P_Type']; ?>"><br><br>
            <label for="P_Age">Pet Age:</label>
            <input type="text" name="P_Age" value="<?php echo $row['P_Age']; ?>"><br><br>
            <label for="Breed">Breed:</label>
            <input type="text" name="Breed" value="<?php echo $row['Breed']; ?>"><br><br>
            <input type="submit" name="submit" value="Update">
        </form>





    </div><br><br>

    <footer class="footer">

        <div class="container">

            <div class="raw">

                <div class="footer-col">
                    <hr>
                    <h4>About Us</h4>

                </div>

                <div class="footer-col">
                    <hr>
                    <h4 id="Usefull-Links">Usefull Links</h4>
                    <ul>
                    <li><a href="Pet Care.html">Pet care</a></li>
                        <li><a href="Pet Gromming.html">Pet grooming</a></li>
                        <li><a href="Pet Training.html">Pet training</a></li>
                        <li><a href="tips.html">PetcareTips</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <hr>
                    <h4>Get In Touch</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>©2023 All Right Reserved</h4>
                </div>

            </div>
        </div>
    </footer>
</body>

</html>