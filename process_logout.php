<?php
	session_start();
	
	//echo "";

	if(isset($_SESSION['admin_email'])){
		session_destroy();
		header('Location:home.php');
	}
	else if (isset($_SESSION['email']))
	{
		session_destroy();
		header('Location:home.php');
	}
	
	else
	{
		echo "Login First";
	}
?>