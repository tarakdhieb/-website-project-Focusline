<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			$error_message = "wrong username or password!";
		}else
		{
			$error_message = "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="logo.png">
</head>
<body>

<style type="text/css">

    #text{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }


    #box{
        position: absolute ;
        margin-top: 10%;
        margin-left:35%;
        width: 300px;
        padding: 20px;
    }

    .error {
        color: red;
    }
    .hero {
  width: 100%;
  height: 100vh;
  background-image: linear-gradient(rgba(12,3,51,0,3),rgba(12,3,51,0,3));
  position: relative;
  padding : 0 5%;
  display: flex;
  align-items: center;
  justify-content: center;
}
@media (min-aspect-ratio: 16/9){
  .back-video{
    width: 100%;
    height: auto;
  }
}
@media (max-aspect-ratio: 16/9){
  .back-video{
    width: auto;
    height: 100%;
  }
}
.back-video{
  position : absolute;
  right: 0;
  bottom: 0;
  z-index: -1;
}
.button{
     
     margin-left: 80px;
     margin-bottom : 50px  ;
     height: 30px;
     width: 150px;
     border-radius: 10px;
     border-color:rgb(214,16,16);
     }
     .button:hover{
         background-color:rgb(214,16,16);
         
     }
     #submit:hover{
         color : white;
     }
     .error-message {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}
.button-sign {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
}

.button-sign:hover {
  background-color: #0056b3;
}
</style>
    <div classe="hero">
            <video autoplay loop muted plays-inline class="back-video">
                <source src="video.mp4" type="video/mp4">
            </video>
            <a href="index.html">
			<div class="logo-image" style="margin-top: 20px;margin-left: 20px" >
                              <img src="focus-line.png" class="img-fluid">
            </div>
            </a>
        <div id="box">

            <form method="post" onsubmit="return validateForm()">
                <div style="font-size: 30px; margin: 20px;padding-left:95px; color: black;">Login</div>

                <input id="text" type="text" name="user_name" required>Name<br>
                <span id="username-error" class="error"></span><br>

                <input id="text" type="password" name="password" required>Password<br>
                <span id="password-error" class="error"></span>
                <?php if (!empty($error_message)) { ?>
		            <p class="error-message"><?php echo $error_message; ?></p>
		        <?php } ?>
                <br>
                <input class="button" type="submit" value="Login"><br>

                <a href="signup.php" class="button-sign">Click to Sign up</a><br><br>
            </form>
        </div>
    </div>

<script>
    function validateForm() {
        var username = document.forms[0]["user_name"].value;
        var password = document.forms[0]["password"].value;

        var usernameError = document.getElementById("username-error");
        var passwordError = document.getElementById("password-error");

        usernameError.textContent = "";
        passwordError.textContent = "";

        if (username === "") {
            usernameError.textContent = "Please enter your username.";
            return false;
        }

        if (lenght(password) < 8) {
            passwordError.textContent = "Please enter your password.";
            return false;
        }

        return true;
    }
</script>

</body>
</html>
