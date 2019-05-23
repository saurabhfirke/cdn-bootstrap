<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		
	</style>
</head>
<body style="background-color: grey">
	<div id="main-wrapper">
		<center>
			<h2>Sign up</h2>
			<h3>welcome bro <?php 
			echo $_SESSION['username'];



			?></h3>

			<img src="img/logo.png" class="Logo" >

		</center>
		<div class="myform">
		<form  action="homepage.php" method="post" >
	<fieldset>
		<legend>hi bunny</legend>
		
		
		<input name="logout" type="submit" id="bck" value="log out" >
		<?php 
		if(isset($_POST["logout"]))

		{
						
			echo '<script type="text/javascript">alert("username already exists");</script>';//this works

			session_destroy();
			header('location:index.php');
		}


		 ?>
	</fieldset>
	
</form>
		</div>

	</div>

</body>
</html>
