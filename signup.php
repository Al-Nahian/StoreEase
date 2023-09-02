<?php  
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);
$alert = false;
$p_alert = false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	require "partitions/_dbconnect.php";
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
	$number 	= $_POST["number"];
  $cpassword  = $_POST["cpassword"];
	$password 	= $_POST["password"];

		if(!empty($number) && !empty($password)){
      if($password == $cpassword){
        $sql = "SELECT * FROM userinf WHERE phone='$number'";
        $result = mysqli_query($connect, $sql);
        $num =  mysqli_num_rows($result);
        if($num > 0){
          $alert = true;
        }else{
          $sql = "INSERT INTO `userinf` (`FirstName`, `LastName`, `phone`, `password`, `serial`) VALUES ('$firstName', '$lastName', '$number', '$password', NULL);";
          $result = mysqli_query($connect, $sql);
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['firstname'] = $firstName;
          $_SESSION['username'] = $LastName;
          header("location: homepage.php");
        }
      }else {
        $p_alert = true;
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
    <link rel="stylesheet" href="styles/style.css">
    
    <title>Signup</title>
  </head>
  <body>

    <?php require 'partitions/_nav.php' ?>

    <?php
    if ($alert == true){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style= "margin: 0">
            <a href="signup.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error! </strong>User already exists! Log in <a href="login.php">here.</a>
    </div>';
    
    } elseif ($p_alert == true){
      echo '
          <div class="alert alert-danger alert-dismissible fade show" role="alert" style= "margin: 0">
          <a href="signup.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error! </strong>Passwords do not match! Try again!
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
          <h2>Signup to StoreEase</h2>
          <form method="POST">

            <div class="inputBox">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>


            <div class="inputBox">
                <label for="lastName" style="margin-top: 0.25rem;">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>

            <div class="inputBox">
                <label for="number" style="margin-bottom: 0rem; margin-top: 0.25rem">Phone Number</label>
                <small id="NumberHelp" class="form-text text-muted" style="margin-top: 0rem; margin-bottom: 5px; font-size:smaller;">We'll never share your number with anyone else.</small>
                <input type="text" class="form-control" id="number" name="number" required>
            </div>

            <div class="inputBox">
              <label for="password" style="margin-top: 0.5rem;">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="inputBox">
              <label for="cpassword" style="margin-top: 0.5rem;">Confirm Password</label>
              <input type="password" class="form-control" id="cpassword" name="cpassword" required>
            </div>

            <div class="submit" style="margin-top: 0.5rem;">
            <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>

            <div class="createAcc">
            <label>
                  <p>Already have an account? <a href="login.php">Login.</a> </p>
              </label>
            </div>
        </div>
        </form>
      </div>
    </section>
  </body>
</html>