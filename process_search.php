<?php
	require 'connection.php';
	session_start();

	$input =  "" . $_GET["search"];
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
		    	<th>Link</th>
		    </tr>
		 ";

		while($row = mysql_fetch_array($result))
		{
			$concatenated_rname = str_replace(" ","+",$row['recipe_name']);
			$built_rurl = "view.php?recipe=" . $concatenated_rname;

			$search .= "
		  	<tr>
		    <td>" . $row['recipe_name'] . "</td>
		    <td>" . $row['recipe_region'] . "</td>
		    <td>" . $row['recipe_category'] ."</td>
		    <td><a id='btn_visit' href='" . $built_rurl . "'>Visit</a></td>
		   	</tr>
		 	 ";
		}

	 echo $search;
	}


	else
	{
		echo "<br>Data Not Found</br>";
	}
?>