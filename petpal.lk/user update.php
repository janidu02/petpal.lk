<?php
  include 'connect.php';
  //session_start();
  //$id = $_SESSION["id"];

  $ID = $_GET['updateid'];
  $sql = "SELECT * FROM user WHERE ID = $ID";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $name = $row['username'];
  $email = $row['Email'];
  $phone = $row['Phone'];
  $password = $row['userpassword'];
  $confirmpassword = $row['userpassword'];


  if(isset($_POST['submit'])){
    $ID = $_POST['ID'];

    $name = $_POST['first_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm_password'];


    $sql = "UPDATE user SET ID=$ID, username='$name', Email='$email', Phone='$phone', userpassword='$password' WHERE ID=$ID";
    $result = mysqli_query($conn, $sql);
    if($result){
      echo "updated";
      header('location:user display.php');
      
    } else {
        echo "Failed to update";
        die(mysqli_error($conn));
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update User Details</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/petdetails.css">
    <link rel="stylesheet" href="styles/registor.css">

</head>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="petcare1.png" height="150" width="150" alt="logo" title="shopping cart">My Petpal</a>
        </div>
        <div class="menu-icon">&#9776;</div>


        <ul class="menu">
        <li><a href="index.php">Home</a></li>
         <li><a href="Our Services.html">Our Services</a>          
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="Account.php">Account</a></li>
        </ul>

    </nav>
    <center>
        <br><br>
        <h2>Edit Personal Details</h2>
    </center>
    <br><br>
    <div class="box">

        <!-- HTML form -->
        <form action="" method="post" onsubmit="return verifyPassword()">
            <div class="form-group">
                <label for="first-name">User Name</label>
                <input type="text" id="first-name" name="first_name" value="<?php echo $name; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone-number">Phone Number</label>
                <input type="phone" id="phone-number" name="phone_number" pattern="[0-9]{10}" value="<?php echo $phone; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Change Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm_password" required>
                <span id="message" style="color:red"></span><br><br>
            </div>
            <div class="form-group">
                <input type="hidden" name="ID" value="<?php echo $ID; ?>">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <hr>
                    <h4>About Us</h4>
                </div>
                <div class="footer-col">
                    <hr>
                    <h4 id="Usefull-Links">Useful Links</h4>
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
