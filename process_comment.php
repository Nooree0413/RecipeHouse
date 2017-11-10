<?php
	//Opens up template to set up a connection and use database
	require 'connection.php';
	session_start();
	$referrer = $_SERVER['HTTP_REFERER'];


	if (isset($_SESSION['email'])) //If user is logged in proceed
	{
		//Capture comment from user input
		$comment = $_GET['txt_comment'];

		// Prevent Users from modifying website
		$comment = htmlentities($comment);



		// Comment Censoring
		//$comment = strtolower($comment);
		$find = array('disgusting','lame');
		$replace = array('d*********','l***');
		$comment = str_ireplace($find, $replace, $comment);



		$currentuser_email = $_SESSION['email'];
		

		//Getting Email 
		$query_retrieveuser = " SELECT * FROM register WHERE reg_email = '$currentuser_email'; ";
		$query_result = mysql_query($query_retrieveuser) or die ('Query Failed' . mysql_error());

		$row = mysql_fetch_array($query_result);
		$firstname = $row['reg_fname'];
		$lastname = $row['reg_lname'];


		// Storing current date and time into variable
		//Date function
		$comm_date = date('Y-M-d, H:i',strtotime("+2 Hours"));

		//Variable $recipe already exists as it has been passed from the url
		//echo $recipe;


		$current_recipe = $_SESSION['recipe'];
		//test
		//echo $current_recipe;

		//TO QUERY RECIPE ID FROM DB
		$query_id = "SELECT recipe_id FROM recipe WHERE recipe_name = '$current_recipe' ";
		$query_result1 = mysql_query($query_id) or die ('Error: Could not retrieve recipe ID from database');
		$row1 = mysql_fetch_array($query_result1);
		$recipe_id = $row1['recipe_id'];


		//Inserting comment into database
		$query_insert = "INSERT INTO comment VALUES (NULL,'$currentuser_email','$comment','$comm_date','$recipe_id');";
		$query_result2 = mysql_query($query_insert) or die ('Error: Could not Insert Comment Into Database');

		if ($query_result2)
		{
			$query_incComment = "UPDATE recipe SET rec_commentcount = rec_commentcount + 1 WHERE recipe_name= '$current_recipe'";
			$query_result3 = mysql_query($query_incComment) or die ('Error: FAILED TO INCREMENT no. of comments');
			
		}

		header("Location:" . $_SESSION['lastRecipeViewed']);
		
	}

	else 
	{
		echo "Login First";
	}

?>