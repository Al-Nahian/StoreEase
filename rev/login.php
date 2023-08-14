<?php  
ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);
	$conn = mysqli_connect('localhost','root','','distributor');
	$unsuccessfulmsg = '';

	if(isset($_POST["submit"])){
		$users_phnnum 			= $_POST['number'];
		$users_password 		= $_POST['password'];

		if(empty($users_phnnum)){
			$phnmsg = 'Enter your Phone Number.';
		}else{
			$phnmsg = '';
		}

		if(empty($users_password)){
			$passmsg = 'Enter your password.';
		}else{
			$passmsg = '';
		}

		if(!empty($users_phnnum) && !empty($users_password)){
			$sql = "SELECT * FROM userinf WHERE phone='$users_phnnum' AND password = '$users_password'";
			$result = mysqli_query($conn, $sql);
			$num =  mysqli_num_rows($result);
			if($num > 0){
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $LastName;
				header("location: index.php");
			}else{
				 $unsuccessfulmsg = 'Wrong phone number or Password!';
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
    <link rel="stylesheet" href="styles/login.css">
    
    <title>Login</title>
  </head>
  <body>

    <?php require '../partitions/_nav.php' ?>
    <section>

      <div class="imgBox">
        <img src="https://pixabay.com/get/gc3692cfa8f3f9cef577ab95f9915cea3d41b7b68f11bb9ad38ac98ee0a32f316aa56563c27327f301b10ce0ecc12ba21.jpg" alt="Truck parked at a garage">
        <div class="text">
          <p>No. 1 Distributing App of Bangladesh!</p>
        </div>
      </div>

      <div class="contentBox">
        <div class="formBox">
          <h2>Login to StoreEase</h2>
          <form method="post">

            <div class="inputBox">
                <label for="number">Phone Number</label>
                <input type="text" class="form-control" id="number" name="number">
                <span class="text-danger"><?php if(isset($_POST['submit'])){ echo $phnmsg; }?></span><br>
                <small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
            </div>

            <div class="inputBox">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
              <span class="text-danger"><?php if(isset($_POST['submit'])){ echo $passmsg; }?></span><br>
            </div>

            <div class="remember">
              <label>
                <input type="checkbox" for="remember me"> Remember me</label>
              </label>
            </div>

            <div class="submit">
            <button type="submit" class="btn btn-primary">Submit</button>
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