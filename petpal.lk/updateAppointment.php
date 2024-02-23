<?php

include 'connect.php';

if (isset($_GET['updateid'])) {
    $updateID = $_GET['updateid'];

    $selectQuery = "SELECT * FROM book_appoinment WHERE ID = '$updateID'";
    $selectResult = mysqli_query($conn, $selectQuery);
    $row = mysqli_fetch_assoc($selectResult);

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        $petType = $_POST['petType'];
        $service = $_POST['service'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $additionalInfo = $_POST['additionalInfo'];
        

        // Update the specific column
        $updateQuery = "UPDATE book_appoinment SET petType = '$petType', service = '$service', date = '$date', time = '$time', additionalInfo = '$additionalInfo' WHERE ID = '$updateID'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            // Update successful
            
            echo "<script> 
            alert('Registration Successful'); 
            window.location.href='displayAppoinment.php';
           </script>";
        } else {
            // Update failed
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}
?>

<html>
 <head> 
  <title>Update Appointment </title> 

    <link rel="stylesheet" href="styles/styles.css"> 
    <link rel="stylesheet" href="styles/Book appointment.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=l.e">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     </head> 
 
 <body >
  <nav>
    <div class="logo">
      <a href="index.php"><img  src="images/petcare1.png" height= "150" width= "150" alt= "logo" title= "shopping cart">My Petpal</a>   
    </div>
    <div class="menu-icon">&#9776;</div>
  

    <ul class="menu">
      <li><a href="index.php" >Home</a></li>
      <li><a href="Our Services.html" >Our Services</a>          
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="Account.php">Account</a></li>
    </ul>
    
  </nav>  



<script src="scripts/script.js"></script>

<br>
<h1 style="color: rgb(0, 0, 0);">Book an Appointment</h1><br>
<div class="bookingform bgcolor" >
  <form  method = "POST">
    <label for="petType">Select Pet Type:</label><br>
    <select id="petType" name="petType">
      <option value="dog">Dog</option>
      <option value="cat">Cat</option>
      <option value="bird">Bird</option>
      <option value="other">Other</option>
    </select><br><br>

     <label for="servicetype">Select Service type:</label><br>
  
 

    <input type="radio" id="petGrooming" name="service" value="petGrooming">
    <label for="petGrooming">Pet Grooming</label><br>

    <input type="radio" id="petTraining" name="service" value="petTraining">
    <label for="petTraining">Pet Training</label><br>
    <input type="radio" id="vetClinic" name="service" value="vetClinic">
    <label for="vetClinic">Vet Clinic</label><br><br>

    
  


    <label for="date">Select Date:</label><br>
    <input type="date" id="date" name="date"><br><br>

    <label for="time">Select Time:</label><br>
    <input type="time" id="time" name="time"><br><br>

    


    <label for="additionalInfo">Additional Information:</label><br>
    <textarea id="additionalInfo" name="additionalInfo"></textarea><br><br>

   
    



    <input type="submit" value="Save Appoinment" name="submit">
  </form>
</div>

<br><br>



























<footer class="footer">
  
  <div class="container">

    <div class="raw">

      <div class="footer-col">
        <hr>
        <h4>About Us</h4>
        <p style="color: #fff;">"At 'MY Petpal', we are passionate about pets. Our dedicated 
          team provides top-notch care, ensuring the happiness, health, and 
          well-being of your furry companions."</p>
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