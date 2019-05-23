<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		#bck{
	margin: 2px;
	padding: 2px;
	width: 100%;
	background-color: #f5f6fa;
	color: white;
	padding: 5px;
	text-align: center;
	font-size: 18px;
	font-weight: bold;

}
	</style>
</head>
<body style="background-color: grey">
	<div id="main-wrapper">
		<center>
			<h2>Log In</h2>
			<img src="img/logo.png" class="Logo" >

		</center>
		<div class="myform">
		<form  action="index.php" method="get" >
	<fieldset>
		<legend>hi bunny</legend>
		<label>Username:</label><br>
		<input type="text" class="inputvalues" placeholder="type ur Username"><br>
		<label>Password</label><br>
		<input type="password" class="inputvalues" placeholder="type the password">
		<label> Confirm Password</label><br>
		<input type="password" class="inputvalues" placeholder="type the password again">
		<br>
		<input type="submit" id="signupbtn" value="Sign up" >
		<input type="button" id="bck" value="back page" >
	</fieldset>
	
</form>
		</div>
	</div>

</body>
</html>
