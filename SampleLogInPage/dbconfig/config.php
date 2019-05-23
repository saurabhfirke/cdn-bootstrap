<?php

$con=mysqli_connect("localhost","root","");
if($con->connect_error)
{
	die("connection_aborted".$con->connect_error);

}

mysqli_select_db($con,"samplelogindb");
?>