<?php
	require 'connection.php';
	session_start();

	$input = "";
	$input =  "" . $_GET['search_text'];
	$search = "";
	// Preventing SQL Injection
	$input = mysql_real_escape_string($input);


	// Processing search
	if(isset($input))
	{
		/*
		$query1 = "
		  SELECT * FROM recipe 
		  WHERE recipe_name LIKE '%" . $input . "%'
		  OR recipe_region LIKE '%". $input . "%' 
		  OR recipe_ingredients '%". $input . "%' 
		  OR recipe_category LIKE '%" . $input . "%'
		";

		*/

		$query1 = "SELECT * FROM recipe 
		  WHERE recipe_name LIKE '%" . $input . "%';";
	}

	else
	{
		$query1 = "SELECT * FROM recipe ORDER BY recipe_id";
	}

	$result = mysql_query($query1)or die ('Query Failed' . mysql_error());;
	
	if(mysql_num_rows($result) > 0)
	{
		$search .= "
		<div class='table-responsive'>
	   	<table class='table table bordered'>
		    <tr>
		    	<th>Name</th>
		    	<th>Region</th>
		    	<th>Category</th>
		    </tr>
		 ";

		while($row = mysql_fetch_array($result))
		{
			$search .= "
		  	<tr>
		    <td>".$row['recipe_name']."</td>
		    <td>".$row['recipe_region']."</td>
		    <td>".$row['recipe_category']."</td>
		   	</tr>
		 	 ";
		}

	 echo $search;
	}


	else
	{
		echo "Data Not Found";
	}
?>