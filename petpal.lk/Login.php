<!DOCTYPE html>
<html>
<head>
  <title>My Pet Pal | Login </title>

  <link rel="stylesheet" href="styles/styles.css"> 
  <link rel="stylesheet" href="styles/login.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=l.e">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>


  <div class="login">
    <a href="index.php"><img src="images/xmark.png" alt=""></a>
    <h2>Login</h2>
    <form action="process-login.php" method="post" >
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
        <button type="submit">Login</button>
      </div>

      <div class ="form-group">
        <a href="#"><h5 style="text-align:center;">Forgot Password ?</h5></a>
        <p style="text-align:center;">Don't Have An Account ? <a href="registor.html">Sign Up</a></p> 
      </div>
    </form>
    
    
   
  
  </div>
  
</body>
</html>

