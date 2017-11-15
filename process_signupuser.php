<?php
	session_start();
	require "connection.php";
	
	$firstname = $_POST["txt_fname"];
	$lastname = $_POST["txt_lname"];
	$dob = $_POST["date_dob"];
	$email = $_POST["txt_email"];
	$password = $_POST["txt_pwd"];
	
	$_SESSION['email']=$email;
	$query=mysql_query("SELECT reg_email FROM register WHERE reg_email='$email'") or die('cannot execute'.mysql_error());
	if(mysql_num_rows($query)>0){
		echo"User already exist!! Choose another email address";
	}

	else{
		$query1 = mysql_query("INSERT INTO register VALUES ('$email','$firstname','$lastname','$dob','$password');") or die ("Query Failed" . mysql_error());
		
		$userQuery = "SELECT * FROM register";
		$userQueryResult = mysql_query($userQuery) or die ('Query Failed' . mysql_error());
	
		$userXmlData = "<?xml version='1.0' encoding='UTF-8'?>
		<users>";
	
		while ($row = mysql_fetch_array($userQueryResult))
		{
			$userEmail = $row['reg_email'];
			$userFirstName = $row['reg_fname'];
			$userLastName = $row['reg_lname'];
			$userDob = $row['reg_dob'];
			$userPassword = $row['reg_hashpassword'];
	
			$userXmlData .= 
			"<user>".
			"<email>".$userEmail ."</email>".
			"<firstName>".$userFirstName."</firstName>".
			"<lastName>".$userLastName."</lastName>".
			"<dob>".$userDob."</dob>".
			"<password>".$userPassword ."</password></user>";
		}
	
		$userXmlData .= "</users>";
	
		$userXmlDataObject = simplexml_load_string($userXmlData) or die("Error: Cannot create object");
		$userXmlDataObject ->asXML("users.xml");
	}
	header('Location:Welcomes.php');

?>