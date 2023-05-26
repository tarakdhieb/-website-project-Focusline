<!DOCTYPE html>
<html>
<head>
    <title>Buy Now</title>
</head>
<body>
    <?php session_start();
    
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
            echo "Order placed successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <h1>Buy Now</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" required><br><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br><br>

        <label for="product">Product:</label>
        <input type="text" name="product_id" required><br><br>

        <input type="submit" value="Buy Now">
    </form>
</body>
</html>