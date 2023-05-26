<?php session_start();
    
	
    try {
        include("connection_order.php");

    // Define your database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "orders";

    // Create a new database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process the form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user inputs from the form
        $phoneNumber = $_POST["phone_number"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $product_id = $_POST["product_id"];

        // Insert the order information into the database
        $sql = "INSERT INTO orders (phone_number, name, address, product_id) VALUES ('$phoneNumber', '$name', '$address', '$product_id')";

        if ($conn->query($sql) === TRUE) {
            echo"<script>alert('Order placed successfully!')</script>"; 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
      } catch(Exception $e) {
        echo "<script>alert('Please check your info.')</script>";
      }
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="panier.css">
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="icon" type="image/png" href="panier.png">
</head>
<body>
<a href="index.php">
			<div class="logo-image" style="margin-top: 20px;margin-left: 20px" >
                              <img src="focus-line.png" class="img-fluid">
            </div>
            </a>
    <h1>Buy Now</h1>
    <h2>Quality Appliances for a Better Life!</h2>
  <form id="order-form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div class="form-group">
    <label for="phone_number">Phone Number:</label>
    <input type="text" name="phone_number" required>
    </div>
    <div class="form-group">
    <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
    </div>
    <div class="form-group">
    <label for="address">Address:</label>
        <input type="text" name="address" required>
    </div>
    <div class="form-group">
    <label for="product">Product:</label>
        <input type="text" name="product_id" required><br><br>
    </div>
    <button type="submit" id="buy-button">Buy Now</button>
  </form>
  <br><br>
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
        <li><a href="./contact.html">Contact us</a></li>
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