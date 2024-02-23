<?php
require 'connect.php';

session_start();

if (!isset($_SESSION["login"])) {
  header("Location: registor.html");
} 
else {
  $id = $_SESSION["login"];
}

?>

<html>
 <head> 
  <title> My Pet Pal | Account</title> 

    <link rel="stylesheet" href="styles/styles.css"> 
    <link rel="stylesheet" href="styles/account.css?v=<?php echo time();?>"> 
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
     
    
  </nav>  
  <script src="scripts/script.js"></script>
  <br><br><br><br>
<?php
  $sql = "select * from user where Email='$id'";
  $result = mysqli_query( $conn,$sql);
while ($row = mysqli_fetch_array($result)) {
  


?>


<div class="content">
  <div class="box">
    <div class="form">
    <center><h1> UserDetails </h1></center><br>
    <div class="logout"><a href="logout.php"><button>LOGOUT</button></a></div>
    <span><h2>Name: </h2></span> <?php echo $row['username'];?><br><br>
    <span><h2>E-mail: </h2></span> <?php echo $row['Email']; ?><br><br>
    <span><h2>Contact No: </h2></span> <?php echo $row['Phone']; ?><br><br>
      <div class="buttons">
      <button> <a href="user display.php">Edit account</a></button>
      <button><a href="Pet Details.php">insert pet details</a></button>
    </div>
<?php
}
?>

<?php
  $sql = "select * from petdetails where email='$id'";
  $result = mysqli_query( $conn,$sql);
while ($row1 = mysqli_fetch_array($result)) {

?>


    <center><h1> Pet Details</h1></center><br>
    <span><h2>Pet Name: </h2></span> <?php echo $row1['P_Name']; ?><br><br>
    <span><h2>Type of Pet: </h2></span> <?php echo $row1['P_Type']; ?><br><br>
    <span><h2>Age of Pet: </h2></span> <?php echo $row1['P_Age']; ?><br><br>
    <span><h2>Breed: </h2></span> <?php echo $row1['Breed']; ?><br><br>
    <div class="buttons">
    <button><a href="display.php?petid=<?php echo $row1['Pet_ID']?>">edit pet detailst</a></button>
      
    </div>
    <?php
}
?>
    </div>
  </div>

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