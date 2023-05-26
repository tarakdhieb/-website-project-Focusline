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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="product.css">
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
    }
    </style>
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
                <img class="im1" src="./image1.png">
            </div>
            <div class="conttext">
                <h1 class="text1"> Samsung  -  27 . 4 Cu . Ft  .  Side - by - Side  Refrigerator
                    -  Stainless  steel
                </h1>
                
                <h1 class="text2">$1,499.99 product:1</h1>
                <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>
        </div>
        <div class="Rect2">
            <div class="contimg">
                <img class="im2" src="./img2.png">
            </div>
            <div class="conttext">
                <h1 class="text1"> LG 260 Ltrs 3 Star Frost Free Double Door Refrigerator (GLC292SASX, Amber Steel)
                </h1>
                
                <h1 class="text2">$3,000 product:2</h1>
                <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>
        </div>
        <div class="Rect3">
            <div class="contimg">
                <img class="im2" src="./img1.png">
            </div>
            <div class="conttext">
                <h1 class="text1"> Whirlpool 200 Ltrs 3 Star Direct Cool Single Door Refrigerator(215IMPROPRM3WM, Wine
                    Mulia)
                    
                    <h1 class="text2">$1,999.99 product:3</h1>
                    <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>



        </div>
        <div class="Rect4">
            <div class="contimg">
                <img class="im2" src="./img3.png">
            </div>
            <div class="conttext">
                <h1 class="text1">  Whirlpool  355   Ltrs   3 - Star   Frost <br>  Free  Bottom   Freezer   Inverter  Refrigerator
                    
                    <h1 class="text2">$1,599 product:4</h1>
                    <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>



        </div>
        <div class="Rect5">
            <div class="contimg">
                <img class="im2" src="./img5.png">
            </div>
            <div class="conttext">
                <h1 class="text1"> LG 694 Ltrs Frost Free Side By Side Inverter Refrigerator (GCB257UGBM, Black Glass)
                    
                    <h1 class="text2">$2,599.99  product:5</h1>
                    <a href ="panier.php"> <button  class="button" id="submit" type="submit"> Shop Now </button></a>
            </div>



        </div>
        <div class="Rect6">
            <div class="contimg">
                <img class="im2" src="./img6.png">
            </div>
            <div class="conttext">
                <div class="contt">
                <h1 class="text1">Hitachi 511 Ltrs Frost Free Triple Door Inverter Refrigerator (RWB560PND9GBK, Glass
                    Black)</h1>
                
                    <h1 class="text2">$2,099.9 product:6</h1>
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