<?php
	//Opens up template to set up a connection and use database
	require 'adminconnection.php';
	
	//Capture info. form text box
	$email = $_POST['txt_email'];
	$password = $_POST['txt_pwd'];

	
	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);

	//creating hash password
	$hashPassword=mysql_real_escape_string((md5($password)));
	
	$query = "SELECT * FROM adminlogin WHERE admin_email = '$email' AND admin_hashpassword = '$hashPassword';";
	$result = mysql_query($query) or die ("Failed to query database" . mysql_error());
	
	//Check for number of rows returned from $query
	$numrows = mysql_num_rows($result);
	
	if ($numrows != 0)
	{
		$row = mysql_fetch_array($result);
		
		if ($row['admin_email'] == $email && $row['admin_hashpassword']=$hashPassword)
		{
			// Start the session
			session_start();
			
			$_SESSION['admin_email']=$email;
			
			header("Location:login_successful.php");
		}
		
		else
		{
			echo "Login failed !";
		}
		
	}
	
	else
	{
		die ("TRY LOGIN IN AGAIN!");
	}
	
	
?>