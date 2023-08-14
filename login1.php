<?php
	$conn = mysqli_connect('localhost','root','','distributor');
	$unsuccessfulmsg = '';

	if(isset($_POST["submit"])){
		$users_phnnum 			= $_POST['phnnum'];
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


<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Login Page </title>
<style>
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: #95A5A6;}

button {
       background-color: #f1f1f1;
       width: 75%;
        color: black;
        padding: 15px;
        margin: 10px 0px;
        border: 2px solid black;
        cursor: pointer;
				text-align: center;
 			  text-decoration: none;
 			  display: inline-block;
				transition-duration: 0.4s;
         }

 input[type=text], input[type=password] {
	 			background-color: #f1f1f1;
				width: 21.5%;
        margin: 8px 0;
        padding: 5px;
        display: inline-block;
        border: 2px solid blacks;
				transition-duration: 0.4s;
    }
		input:hover {
					 opacity: 0.4;
			 }

 button:hover {
        opacity: 0.4;
    }


		  .submitbtn {
		        	width: 32%;
		        	padding: 8px 4px;
		        	margin: 6px 0px;

		    }
			.loginbtn {
			        width: 32%;
			        padding: 8px 4px;
			        margin: 6px 0px;
			  }
       .cancelbtn {
 			 				width: 32%;
        			padding: 8px 4px;
        			margin: 6px 0px;
    		}
		  .homebtn{
      				width: 32%;
      				padding: 8px 4px;
      				margin: 6px 0px;
    		}
			.signupbtn{
      				width: 32%;
      				padding: 8px 4px;
      				margin: 6px 0px;
    		}
 			.container {
							padding: 20px;
				}

    h1 {
  			color: Black;
				text-shadow: 2px 2px #f1f1f1;
				}

div {text-align: center;}
</style>
</head>
<body>

<form action="" method="POST">
    <div class="container" style="margin-top:50px">
				<h1 class="text-center" style="font-size:50px;">Login System</h1>
				<p class="text-center text-success">
				<?php if(!empty($_SESSION['signupmsg'])){ echo $_SESSION['signupmsg']; } ?></p>
			</div>

        <div class="container">
					<label><h5><b>Phone Number: </b></h5></label>
					<input type="text" placeholder="Enter Phone Number" name="phnnum" value="<?php if(isset($_POST['submit'])){echo $users_phnnum;$_SESSION['phnnum'] = $users_phnnum; } ?>">
							<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $phnmsg; }?></span><br>
					<label><h5><b>Password:   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></h5></label>
					<input type="password" placeholder="Enter Password" name="password" >
					<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $passmsg; }?></span><br>
					<button name="submit" class="loginbtn">Login</button> <br>
            <input type="checkbox" checked="checked"><b> Remember me </b><br>
            <button type="submitbtn" class="cancelbtn"> Cancel</button> <br>
						<button type="submitbtn" class="homebtn" formaction="home.php"> HOME </button> <br>
            <a href="#"> Forgot password? </a> <br>
            <button type="submitbtn" class="signupbtn" formaction="signup.php"> Create new account </button>

        </div>
    </form>
</body>
</html>
