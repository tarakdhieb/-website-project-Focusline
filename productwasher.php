<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    if (!isset($_SESSION['user_id'])) {
        // Rediriger l'utilisateur vers la page de connexion
        header("Location: login.php");
        exit();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<style>.login-image img {
    width: 50px;
    height: auto;
}
  
.login-image {
    position: fixed;
    padding-top: 20px;
    margin-left: 92%;
  
}</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop dishwasher</title>
    <link rel="stylesheet" href="dishwasher.css">
    <link rel="icon" type="image/png" href="logo.png">

</head>

<body>
<header>
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
    </header>
    <div class="bod">
        <div class="container">
            <label class="category">categories</label>
        </div>
        <div class="cont2">
            <select onchange="window.location.href = this.value;">
                <option  class="cat" value="" disabled selected hidden>Any</option>
                <option  class="cat" value="productmicro.php">Microwave</option>
                <option  class="cat" value="./product.php">Refrigirator</option>
                <option  class="cat" value="productoven.php">Oven</option>
                <option  class="cat" value="productwasher.php">dishwasher</option>
                <option  class="cat" value="productwashing.php">Waching Machine</option>

            </select>

        </div>


    </div>
    <div class="cont1">
        <div class="Rect1">
            <div class="contimg">
                <img class="im1" src="./dishwasher1.jpg">
            </div>
            <div class="conttext">
                <h1 class="text1"> Samsung- StormWash 24" Top Control Built-In Dishwasher with AutoRelease Dry 48 dBA - Stainless steel
                </h1>
                
                <h1 class="text2">$579.99</h1>
                <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>
        </div>
        <div class="Rect2">
            <div class="contimg">
                <img class="im2" src="./dishwasher2.jpg">
            </div>
            <div class="conttext">
                <h1 class="text1">LG - 24" Front Control Smart Built-In Stainless Steel Tub Dishwasher, Quadwash, and 48dba 
                </h1>
                
                <h1 class="text2">$599.99</h1>
                <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>
        </div>
        <div class="Rect3">
            <div class="contimg">
                <img class="im2" src="./dishwasher3.jpg">
            </div>
            <div class="conttext">
                <h1 class="text1"> Samsung- StormWash 24" Top Control Built-In Dishwasher with AutoRelease Dry, 48 dBA - Stainless Steel
                    
                    <h1 class="text2">$599</h1>
                    <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>



        </div>
        <div class="Rect4">
            <div class="contimg">
                <img class="im2" src="./dishwasher4.jpg">
            </div>
            <div class="conttext">
                <h1 class="text1"> KitchenAid - 24" Top Control Built-In with Stainless Steel Tub, ProWash Cycle,  39 dBA
                    <h1 class="text2">$1149.99</h1>
                    <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>



        </div>
        <div class="Rect5">
            <div class="contimg">
                <img class="im2" src="./dishwasher5.jpg">
            </div>
            <div class="conttext">
                <h1 class="text1"> <br> Samsung - 24" Top Control <br> Built-In Dishwasher - Stainless steel
                    
                    <h1 class="text2">$449.99</h1>
                    <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>



        </div>
        <div class="Rect6">
            <div class="contimg">
                <img class="im3" src="./dishwasher6.jpg">
            </div>
            <div class="conttext">
                <div class="contt">
                <h1 class="text1" >Samsung - Linear Wash 24" Top Control Built-In Dishwasher with AutoRelease Dry, 39 dBA - Stainless steel</h1>
                
                    <h1 class="text2">$899.99</h1>
                    </div>
                    <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>
        </div>
    </div>
 
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