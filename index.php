<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="icon" type="image/png" href="panier.png">
</head>
<body>

    <div classe="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="video.mp4" type="video/mp4">
        </video>
            <nav>
                <div class="navbar">
                    <a class="navbar-brand" href="index.php">
                        <div class="logo-image">
                              <img src="focus-line.png" class="img-fluid">
                        </div>
                    </a>
                    <a class="navbar-login" href="panier.php">
                        <div class="login-image">
                              <img src="panier.png" class="img-fluid">
                        </div>
                    </a>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Shop</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                    </ul>
                </div>
            </nav>
        <div class="section">
            <h1>Enhance Your Home with Focus-Line: </h1>
            <br>
            <h2>Quality Appliances for a Better Life!</h2>
        </div>
        <script src="index.js"></script>
        <div class="animated-button">Hi, <?php echo $user_data['user_name']; ?></div>
        <button class="animated-button1"><a href="logout.php">Logout</a></button>
        <footer>
            <div >
                <div class="row">
                    <a class="fb" href="https://www.facebook.com" target="_blank"><img  src="facebook.png" alt="Facebook"></a>
                    <a class="insta" href="https://www.instagram.com" target="_blank"><img  src="instagram.png" alt="Instagram"></a>
                    <a class="ytb" href="https://www.youtube.com" target="_blank"><img  src="youtube.png" alt="YouTube"></a>
                    <a class="twt" href="https://www.twitter.com" target="_blank"><img  src="twitter.png" alt="Twitter"></a>
                </div>
            </div>
      
        
            
            <div class="row">
            <ul>
            <li><a href="./contact.php">Contact us</a></li>
            <li><a href="./PrivacyPolicy.html">Privacy Policy</a></li>
            <li><a href="./termsandconditions.html">Terms & Conditions</a></li>
            </ul>
            </div>
            
            <div class="row">
            Copyright © 2023 - All rights reserved
            </div>
            
        </footer>


</body>
</html>