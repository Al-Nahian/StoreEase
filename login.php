<?php  
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

$alert = false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	require "partitions/_dbconnect.php";
	$number 	= $_POST["number"];
	$password 	= $_POST["password"];

		if(!empty($number) && !empty($password)){
			$sql = "SELECT * FROM userinf WHERE phone='$number' AND password = '$password'";
			$result = mysqli_query($connect, $sql);
			$num =  mysqli_num_rows($result);
			if($num > 0){
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $LastName;
				header("location: index.php");
			}else{
				$alert = true;
			}
		}
	}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="rev/styles/style.css">
    
    <title>Login</title>
  </head>
  <body>

    <?php require 'partitions/_nav.php' ?>
    <?php
    if ($alert == true){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <a href="login.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error! </strong>Wrong user number or password! Try logging in again.
    </div>';
    
    }
    ?>
    <section>

      <div class="imgBox">
        <img src="img/bg.jpg" alt="Truck parked at a garage">
        <div class="text">
          <p>No. 1 Distributing App of Bangladesh!</p>
        </div>
      </div>

      <div class="contentBox">
        <div class="formBox">
          <h2>Login to StoreEase</h2>
          <form method="POST" action="login2.php">

            <div class="inputBox">
                <label for="number" style="margin-bottom: 0rem">Phone Number</label>
                <small id="NumberHelp" class="form-text text-muted" style="margin-top: 0rem; margin-bottom: 5px; font-size:smaller;">We'll never share your number with anyone else.</small>
                <input type="text" class="form-control" id="number" name="number" required>
            </div>

            <div class="inputBox">
              <label for="password" style="margin-top: 0.5rem;">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="remember">
              <label>
                <input type="checkbox" for="remember me"> Remember me</label>
              </label>
            </div>

            <div class="submit">
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </div>

            <div class="createAcc">
            <label>
                  <p>Don't have an account? <a href="/rev/signup.php">Create one.</a> </p>
              </label>
            </div>
        </div>
        </form>
      </div>
    </section>
  </body>
</html>