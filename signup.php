<?php

$conn = new mysqli( 'localhost','root','','distributor');
if(!$conn){
    echo 'not connect';
}

if ( isset($_POST["submit"]) ){

//require_once('connect.php');
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$cpass = $_POST['psw-repeat'];

if ($password==$cpass) {
  $query1 = "INSERT INTO userinf(FirstName,
                                  LastName,
                                  phone,
                                  passWord)
      VALUES (
          '$FirstName',
          '$LastName',
          '$phone',
          '$password'
      )";

      if( $conn->query($query1) == TRUE){
        echo 'data  inserted';
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $LastName;
        header("location: index.php");
      }else{
          echo 'data not inserted';
      }
  }
  else {
    echo 'Passwords do not match!';
  }
}
?>

<!DOCTYPE html>
<html>
<style>

body {font-family: Arial, Helvetica, sans-serif;
  background-color: #95A5A6;}


/* Full-width input fields */

input[type=text], input[type=password] {
  width: 32%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: 2px solid black;
  background: #f1f1f1 ;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px;
  margin: 8px 0;
  border: 2px solid black;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  float: left;
}

/* Add padding to container elements */
.container {
  padding: 35px;
}


</style>

<body>

<form action="" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="FirstName"><b>FirstName </b></label><br>
    <input type="text" placeholder="Enter FirstName" name="FirstName" required>
    <br>

    <label for="LastName"><b>LastName </b></label>
    <br>
    <input type="text" placeholder="Enter Last Name" name="LastName" required>
    <br>

    <label for="phone"><b>Phone Number </b></label><br>
    <input type="text" placeholder="Enter Phone Number" name="phone" required>
    <br>

    <label for="password"><b>Password </b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>

    <label for="psw-repeat"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <br>

    <label>
    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="mt-1 pb-2">
		<button name="submit" class="btn btn-success">Sign In</button>
		</div>

    <div class="mt-1 pb-2">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<b>	Alrady have an account? <a href="login1.php" class="text-decoration-none">Login</a></b>
		</div>
  </div>
</form>
</body>
</html>
