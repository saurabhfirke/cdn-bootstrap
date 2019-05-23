<?php
session_start();
require 'dbconfig/config.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: grey">
	<div id="main-wrapper">
		<center>
			<h2>Log In</h2>
			<img src="img/logo.png" class="Logo" >

		</center>
		<div class="myform">
		<form  action="index.php" method="post" >
	<fieldset>
		<legend>hi bunny</legend>
		<label>Username:</label><br>
		<input  name="username" type="text" class="inputvalues" placeholder="type ur Username"><br>
		<label>Password</label><br>
		<input name="password" type="password" class="inputvalues" placeholder="type the password">
		<br>
		<input name="login" type="submit" id="loginbtn" value="Log in" >
		<a href="signup.php"><input type="button" id="registerbtn" value="register"></a>
	</fieldset>
	
</form>

<?php 
		if(isset($_POST["login"]))
		{
				//echo '<script type="text/javascript">alert("button clicked");</script>';//this works
				$username=$_POST["username"];
				$password=$_POST["password"];
				$query="select * from userinfotable WHERE username='$username' AND password='$password' ";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
							echo '<script type="text/javascript">alert("welcome darling");</script>';//this works//means user is valid
							$_SESSION['username']=$username;
							header('location:homepage.php');
				}
				else {
					# code...
						echo '<script type="text/javascript">alert("get lost bitch");</script>';//this works
				}
		}



 ?>
		</div>
	</div>

</body>
</html>
