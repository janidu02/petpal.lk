<?php
require 'connect.php';
?>

<html>
 <head> 
  <title> My Pet  | Home </title> 

    <link rel="stylesheet" href="styles/styles.css"> 
    <link rel="stylesheet" href="styles/home.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=l.e">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     </head> 
 
 <body>
  <script type="text//javascript" src="scripts/script.js"></script>
  <nav>
   
    <div class="logo">
      <a href="index.php"><img  src="images/petcare1.png" height= "150" width= "150" alt= "logo" title= "shopping cart">My Petpal</a>   
    </div>
    <div class="menu-icon">&#9776;</div>
  

    <ul class="menu">
    <li><a href="index.php" >Home</a></li>
      <li><a href="Our Services.html" >Our Services</a>          
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="Account.php">Account</a></li>
      <li><a href="login.php"  ><button id="loginButton">Login</button></a></li>
      
    </ul>
    
  </nav>  
  <script src="scripts/script.js"></script>
  <br><br><br><br>

<!-- <div class="login">
    <a href="login.php"><button>Login</button></a>
  </div> -->
 


<br><br><br><br>

<section class="gallery">
  <div class="slider-wrapper">
    <div class="slider">
      <img id="slide-1" src="images/bonnie-kittle-MUcxe_wDurE-unsplash.png" />

      <img id="slide-2" src="images/jesse-schoff-i2DefZ6PCN0-unsplash.png" />

      <img id="slide-3" src="images/yerlin-matu-GtwiBmtJvaU-unsplash.png" />
    </div>
    <div class="slider-nav">
      <a href="#slide-1"></a>
      <a href="#slide-2"></a>
      <a href="#slide-3"></a>
    </div>
  </div>
</section>


<br><br><br><br>

<div class="chooseus">
  <img class="" src="images/feature.jpg" alt="">

      <div class="discrition">
          <h4 class="">Why Choose Us?</h4><br>
          <h1 class="display-4 mb-4"><span class="text-primary">Special Care</span> On Pets</h1><br><br>
          <p >"Discover why we are the top choice for pet owners. With our expert team, personalized care, 
            state-of-the-art facilities, and commitment to your pet's well-being, we provide an unparalleled experience that ensures your furry
             friend receives the love and attention they deserve."</p>
          
          <br><br>
          <div class="row ">
              <div class="col">
                <h5 class="text-truncate m-0">Best In Industry</h5>
                <img  src="images/Best In Industry.png" height= "80" width= "80" alt= "logo">
                      
              </div>

              <div class="col">
                <h5 class="text-truncate m-0">Emergency Services</h5>
                <img  src="images/Emergency Services.png" height= "80" width= "80" alt= "logo">
                    
            </div>

            <div class="col">
              <h5 class="text-truncate m-0">Special Care</h5> 
              <img  src="images/Special Care.png" height= "80" width= "80" alt= "logo">
                 
          </div>

          <div class="col">
            <h5 class="text-truncate m-0">Customer Support</h5>  
            <img  src="images/Customer Support.png" height= "80" width= "80" alt= "logo">
              
        </div>
             
          </div>
       </div>
    </div>



    <br><br><br><br>
    <div class="buttontext">
      <h2 style="text-align:center;">Book an Appointment for Veterinary. </h2> 
      <div style="text-align:center;">
        <button class="appointment-button"><a href="Book appointment.html">Appointment</a></button>
      </div>
    </div>
    <br><br><br><br>





<div class="services" id="services">
      <div class="servicesheading" >       
          <h1 >Our Excellent Pet Care Services</h1>
      </div>
      
         
          <div class="service-box">
              <div class="service-item">
                  
                  <div>
                      <h5 class="text-uppercase ">Pet care</h5>
                      <img  src="images/pet care.png" height= "150" width= "150" alt= "logo" title= "shopping cart">
                      <p>"Expert pet care and compassionate veterinarians dedicated to ensuring your furry friend's health and well-being."</p>
                      <a class="text-primary text-uppercase" href="Pet Care.html">Read More</a>
                  </div>
              </div>
          </div>

          <div class="service-box">
              <div class="service-item ">
                  
                  <div>
                      <h5 class="text-uppercase ">Pet Grooming</h5>
                      <img  src="images/petgrooming.png" height= "150" width= "150" alt= "logo" title= "shopping cart">
                      <p>"Pamper your pet with professional grooming services, keeping them clean, stylish, and comfortable. Give your furry friend the royal treatment they deserve."</p>
                      <a class="text-primary text-uppercase" href="Pet Gromming.html">Read More</a>
                  </div>
              </div>
          </div>

          <div class="service-box">
              <div class="service-item ">
                  <div>
                      <h5 class="text-uppercase ">Pet Training</h5>
                      <img  src="images/PET TRAINING.png" height= "150" width= "150" alt= "logo" title= "shopping cart">
                      <p>"Unlock your pet's full potential through personalized training programs, fostering obedience, socialization, and a deeper bond between you and your furry companion."</p>
                      <a class="text-primary text-uppercase" href="Pet Training.html">Read More</a>
                  </div>
              </div>
          </div>

          <div class="service-box">
              <div class="service-item ">
                  <div>
                      <h5 class="text-uppercase ">Petcare Tips</h5>
                      <img  src="images/PETCARE TIPS.png" height= "150" width= "150" alt= "logo" title= "shopping cart">
                      <p>"Explore our comprehensive collection of petcare tips, offering valuable insights and advice on nutrition, grooming, training, and overall well-being, ensuring a happy and healthy life for your beloved pet."</p>
                      <a class="text-primary text-uppercase" href="tips.html">Read More</a>
                  </div>
              </div>
          </div>
          <div class="service-box">
            <div class="service-item ">
                <div>
                    <h5 class="text-uppercase ">Adopt A Animal</h5>
                    <img  src="images/adopt2.png" height= "150" width= "150" alt= "logo" title= "shopping cart"><br>
                    <p>"You can give a homeless animal a second chance through adoption. These pets have been sterilised, and screened for good behaviour before matching them with potential pet owners."</p>
                    <a class="text-primary text-uppercase" href="Adoption Request.html">Read More</a>
                </div>
            </div> 
        </div>
      
</div><br><br><br><br>



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