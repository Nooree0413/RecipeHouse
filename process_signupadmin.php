<?php
	session_start();
	require "adminconnection.php";
	
	$firstname = $_POST["txt_fname"];
	$lastname = $_POST["txt_lname"];
	$dob = $_POST["date_dob"];
	$email = $_POST["txt_email"];
	$password = $_POST["txt_pwd"];
	
	//Capturing values from form and inserting into 'register' and 'login' tables


	$_SESSION['admin_email']=$email;
	
	$query1 = mysql_query("INSERT INTO adminlogin VALUES ('$email','$firstname','$lastname','$dob','$password');") or die ("Query Failed" . mysql_error());
	
	
	header('location:Welcomes.php');
	

?>