<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Rediriger l'utilisateur vers la page de connexion
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="stylesheet" href="aboutus.css">
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="icon" type="image/png" href="panier.png">
</head>
<body>
    <style>
.login-image img {
    width: 50px;
    height: auto;
}
  
.login-image {
    position: fixed;
    padding-top: 20px;
    margin-left: 92%;
  
}
    .fb img {
        transition: transform 0.3s ease;
      }
      
      .fb:hover img {
        transform: scale(1.2); 
      }
      .insta img {
        transition: transform 0.3s ease;
      }
      
      .insta:hover img {
        transform: scale(1.2);
        
      }
      .ytb img {
        transition: transform 0.3s ease;
      }
      
      .ytb:hover img {
        transform: scale(1.2);
        
      }
      .twt img {
        transition: transform 0.3s ease;
      }
      
      .twt:hover img {
        transform: scale(1.2);
        
      }
      footer{
        background: rgb(97,102,106);
        padding:30px 0px;
        font-family: 'Play', sans-serif;
        text-align:center;
        margin-top: 30px;
        }
        
        footer .row{
        width:100%;
        margin:1% 0%;
        padding:0.6% 0%;
        color:white;
        font-size:0.8em;
        }
        
        footer .row a{
        text-decoration:none;
        color:white;
        transition:0.5s;
        }
        
        footer .row a:hover{
        color:#fff;
        }
        
        footer .row ul{
        width:100%;
        }
        
        footer .row ul li{
        display:inline-block;
        margin:0px 30px;
        }
        
        footer .row a i{
        font-size:2em;
        margin:0% 1%;
        }
        footer .row a img {
            width: 30px;
            padding: 10px; 
          }</style>
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
    <div class="section">
        <div id="titre">
            <h1>ABOUT <br> US</h1>
            <br>
            <p>Focus-Line is a company that sells household appliances. <br> The company offers a wide range of products including kitchen <br> appliances such as refrigerators, ovens, and cooktops, <br> as well as washing appliances like washing machines and dryers. <br> Focus-Line also specializes in the sale of air conditioning, heating, <br> and air purification appliances to improve the quality of life at home. <br> The company is known for offering high-quality products at competitive <br> prices and for its excellent customer service.</p>
        </div>
            <img id="imaa" src="about.png" >
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
</html>