
<?php
  include 'connect.php';
?>

<html>

<head>
    <title> Contact Us Details  </title>

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



    <div class="tablecontain" >

          <div class="tablecontain-inner">

            <table class="content-table">
                <thead>
                  <tr>
                <!--    <th>MessageID</th>-->
                    <th>CustomerName</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Message</th>
                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $email = $_GET["email"];

                  $sql = "Select * from contact where email='$email'";
                  $result = mysqli_query($conn,$sql);
                  if($result){
                    while($row = mysqli_fetch_assoc($result)){
                      $id = $row['id'];
                      $name = $row['name'];
                      $email = $row['email'];
                      $phone = $row['phone'];
                      $message = $row['message'];
                      echo '<tr>
                      
                      <td>'.$name.'</td>
                      <td>'.$email.'</td>
                      <td>'.$phone.'</td>
                      <td>'.$message.'</td>
                      <td>
                       <a href="editcontact.php?updateid='.$id.'?email='.$email.'"><button class="ctn">Edit</button></a>
                       <a href="delete.php?deleteid='.$id.'" ><button class="ctn">Delete</button></a>
                      </td>

                      </tr>';
                    }
                    
                    
                  }

                  ?>

                  
                  
                </tbody>
              </table><br>
             
            </div>
              <div class="dlst"> <a href="contact.php" class="ctn">Back</a></div>
            

        

        
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