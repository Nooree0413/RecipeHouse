<?php
	session_start();
	require "connection.php";
	
	$firstname = $_POST["txt_fname"];
	$lastname = $_POST["txt_lname"];
	$dob = $_POST["date_dob"];
	$email = $_POST["txt_email"];
	$password = $_POST["txt_pwd"];
	
	//creatting hash password using md5
	$hashPassword=mysql_real_escape_string((md5($password)));
	//Capturing values from form and inserting into 'register' and 'login' tables


	$_SESSION['email']=$email;
	$query=mysql_query("SELECT reg_email FROM register WHERE reg_email='$email'") or die('cannot execute'.mysql_error());
	if(mysql_num_rows($query)>0){
		echo"User already exist!!Choose another email address";
	}

	else{
		$query1 = mysql_query("INSERT INTO register VALUES ('$email','$firstname','$lastname','$dob','$hashPassword');") or die ("Query Failed" . mysql_error());
	
	}
	header('Location:Welcomes.php');

?>