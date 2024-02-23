<html>

<head>
    <title> Insert Pet Details </title>

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/petdetails.css">
    <meta name="viewport" content="width=device-width, initial-scale=l.e">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="index.php"><img src="petcare1.png" height="150" width="150" alt="logo" title="shopping cart">My Petpal</a>
        </div>
        <div class="menu-icon">&#9776;</div>


        <ul class="menu">
        <li><a href="index.php" >Home</a></li>
         <li><a href="Our Services.html" >Our Services</a>          
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="Account.php">Account</a></li>
        </ul>

    </nav>
    </header>
    <main>
        <div class="content">
            <center>
                <br><br>
                <div class="box">
                    <form action="pet_insert.php" method="post">

                        <h2>Information</h2>
                        <div class="input-field">
                            <label for="petName">Pet Name</label>
                            <input type="text" id="petName" name="petName">
                        </div><br>
                        <div class="input-field">
                            <label for="petType">Type of Pet</label>
                            <input type="text" id="petType" name="petType">
                        </div><br>
                        <div class="input-field">
                            <label for="petAge">Age of Pet</label>
                            <input type="text" id="petAge" name="petAge">
                        </div><br>
                        <div class="input-field">
                            <label for="petBreed">Breed</label>
                            <input type="text" id="petBreed" name="petBreed">
                        </div><br>

                        <button type="submit" name="submit"></a>Submit</button>

                    </form>
                </div>
            </center>
        </div>
    </main>
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
    </div>
    <script src="script.js"></script>
</body>

</html>