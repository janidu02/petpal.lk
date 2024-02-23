<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    $result = mysqli_query($conn,$sql);
    if($result){
      echo "<script>
      alert('Data submitted successfully');
      window.location.href='displayMessage.php?email=$email';
      </script>";
    }else{
      die(mysqli_error($conn));
    }
  }
?>

<!DOCTYPE html>

<html>

<head>
  <title> My Pet Pal | Contact Us </title>

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
      <li><a href="login.php">Login</a></li>
      <li><a href="Account.php">Account</a></li>
    </ul>

  </nav>



  <script src="script.js"></script>



  <div class="contain-er">

    <div class="form">

      <div class="contact-info">

        <h3 class="title">Let's connect</h3>

        <p class="text">
          We're here to help you take care of your furry friends! Whether you have a question about our services, need
          to make a booking, or just want to say hello, we're always happy to hear from you.
          Please feel free to contact us. We look forward to hearing from you!
        </p>

        <div class="info">
          <div class="information">
            <img src="images/location.png" class="icon" alt="">
            <p>21/B,Baker Sreet, London.</p>
          </div>

          <div class="information">
            <img src="images/mail.png" class="icon" alt="">
            <p>shhhh@yahoo.com</p>
          </div>

          <div class="information">
            <img src="images/phone.png" class="icon" alt="">
            <p>123-4567-8910</p>
          </div>

        </div>

        <div class="social-media">

          <p>Connect with us:</p>

          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>

        </div>

      </div>

      <div class="contact-form">

        <form method="post" autocomplete="off">

          <h3 class="title">Contact us</h3>

          <div class="input-container">
            <input type="text" name="name" class="input" placeholder="Your Name" required>
            <label for="" class="l1">Name</label>

          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" placeholder="Email address" required>
            <label for="" class="l1">Email</label>

          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" placeholder="Phone number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
            <label for="" class="l1">Phone</label>

            

          </div>
          <div class="input-container text area focus">
            <textarea name="message" class="input" placeholder="Write the Message" required></textarea>
            <label for="" class="l1">Message</label>

          </div>
          <input type="submit" value="Send" class="btn" name="submit">
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