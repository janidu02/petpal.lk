<?php

include 'connect.php';

if (isset($_GET['updateid'])) {
    $updateID = $_GET['updateid'];

    // Retrieve the existing values from the database
    $selectQuery = "SELECT * FROM adoption WHERE ID = '$updateID'";
    $selectResult = mysqli_query($conn, $selectQuery);
    $row = mysqli_fetch_assoc($selectResult);

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        $email = $_GET["email"];

        $newName = $_POST['Name'];
        $newAddress = $_POST['Address'];
        $newPhone = $_POST['Phone'];
        $newRequest = $_POST['Request'];

        // Update the specific column
        $updateQuery = "UPDATE adoption SET Full_Name = '$newName', Home_Address = '$newAddress', Phone = '$newPhone', Request = '$newRequest' WHERE Email='$email'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            // Update successful
            echo "Record updated successfully.";
            header("location: Adoption displayMessage .php?email=$email");
            echo "<script>alert('OK')</script>";
        } else {
            // Update failed
            echo "Error updating record: " . mysqli_error($conn);
            header("location: Adoption displayMessage .php?email=$email");
            echo "<script>alert('NOT OK')</script>";
        }
    }
}
?>

<html>

<head>
    <title> Edit Request </title>

    <link rel="stylesheet" href="styles/Contactstyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=l.e">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="images/petcare1.png" height="150" width="150" alt="logo">My Petpal</a>
        </div>
        <div class="menu-icon">&#9776;</div>


        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="Our Services.html">Our Services</a>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="Account.php">Account</a></li>
        </ul>

    </nav>



    <script src="script.js"></script>



    <div class="contain-er">

        <div class="form2">

            <div class="contact-form">

                <form method="post" autocomplete="off">

                    <h3 class="title">Edit Request</h3>

          <div class="input-container">
            <input type="text" name="Name" class="input" placeholder="Your Name" required>
            <label for="" class="l1">Name</label>

          </div>

          <div class="input-container">
            <input type="text" name="Address" class="input" placeholder="Your Address" required>
            <label for="" class="l1">Address</label> 

          </div>

          

          <div class="input-container">
            <input type="tel" name="Phone" class="input" placeholder="Phone Number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
            <label for="" class="l1">Phone</label>

          </div>
          
          <div class="input-container text area focus">
            <textarea name="Request" class="input" placeholder="Your Request about Adoption" required></textarea>
            <label for="" class="l1">Request</label>

          </div>

          <div>
                    
            <input type="submit" name="submit" value="Update" class="btn">
            <a href="javascript:history.back()" class="ctn">Cancel</a>
            </div>

                </form>
            </div>
        </div>
    </div>





























    <footer class="footer">


        <div class="container">

            <div class="raw">

                <div class="footer-col">
                    <h4>About Us</h4>
                    <p style="color: #fff;">"At 'MY Petpal', we are passionate about pets. Our dedicated
                        team provides top-notch care, ensuring the happiness, health, and
                        well-being of your furry companions."</p>
                    <hr>
                </div>

                <div class="footer-col">
                    <h4>Usefull Links</h4>
                    <hr>
                    <ul>
                        <li><a href="Pet Care.html">Pet care</a></li>
                        <li><a href="Pet Gromming.html">Pet grooming</a></li>
                        <li><a href="Pet Training.html">Pet training</a></li>
                        <li><a href="tips.html">PetcareTips</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Get In Touch</h4>
                    <hr>
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