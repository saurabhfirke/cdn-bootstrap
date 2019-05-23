<?php

require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		
	</style>
</head>
<body style="background-color: grey">
	<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>

</nav>
	<div id="main-wrapper">
		<center>
			<h2>Sign up</h2>
			<img src="img/logo.png" class="Logo" >


		</center>
		<div class="myform">
		<form  action="signup.php" method="post" >
	<fieldset>
		<legend>hi bunny</legend>
		<label>Fullnamename:</label><br>
		<input name="fullname" type="text" class="inputvalues" placeholder="type ur fullname" required><br>
		<label>Gender:</label><br>
		<input name="gender" type="radio" class="radiobtn" value="MALE" checked required>MALE
		<input name="gender" type="radio" class="radiobtn" value="FEMALE" required>FEMALE<br><br>
		<label>qualification:</label>
		<select class="qualification" name="qualification">
			<option value="BE">BE</option>
			<option value="Bsc">Bsc</option>
			<option value="Bcom">Bcom</option>
			<option value="Ba">Ba</option>


		</select><br><br>
		<label>Username:</label><br>
		<input name="username" type="text" class="inputvalues" placeholder="type ur Username" required><br>
		<label>Password</label><br>
		<input name="password" type="password" class="inputvalues" placeholder="type the password" required>
		<label> Confirm Password</label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="type the password again" required>
		<br>
		<input name="submit_btn" type="submit" id="signupbtn" value="Sign up" <!-- onclick="Alert() -->">
		<a href="index.php"><input type="button" id="bck" value="back page" ></a>
	</fieldset>
	
</form>
<!-- <script type="text/javascript">
	function Alert(){
		alert("Button Clicked");
	}
</script> -->
<?php 


		if(isset($_POST["submit_btn"])) /*$post is global variable which is inbuilt in php lang and whenever u send a data from frontend to severside u can access that data using $_POST and name of the attribute that was posted*/
		{
			// echo '<script type="javascript">alert("bttn clicked");</script';
			//echo '<script type="text/javascript">alert("bttn clicked")</script>'; 
			$fullname=$_POST["fullname"];
			$gender=$_POST["gender"];
			$qualification=$_POST["qualification"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$cpassword=$_POST["cpassword"];

			if ($password==$cpassword) {
				# code...
				$query="select * from userinfotable WHERE username='$username'";
				$query_run=mysqli_query($con,$query);
				$rows=mysqli_num_rows($query_run);

				if($rows>0)
					{
						
			echo '<script type="text/javascript">alert("username already exists");</script>';//this works

						
					}
				else
				{
					$query= "insert into userinfotable values('$username','$fullname','$gender','$qualification','$password')";
					$query_run=mysqli_query($con,$query);
				}

			}
			else
			{
				echo '<script type="text/javascript">alert("mad ");</script>';

			}

		}
	 ?>
		</div>
	</div>
	

</body>
</html>
