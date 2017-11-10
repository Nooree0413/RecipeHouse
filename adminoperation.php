<?php
require 'connection.php';

	//deleting user
	if(isset($_POST['delete'])){
		$email=$_POST['txt_mail'];
		require 'connection.php';

		$query=mysql_query("DELETE FROM register WHERE reg_email='$email'") or die('cannot delete'.mysql_error());

		echo"Successfully deleted";

		header("location:admintask.php");
	}

	//deleting recipe
	else if(isset($_POST['Deleterep'])){
		$id=$_POST['txt_recipeid'];

		require 'connection.php';
		$query=mysql_query("DELETE FROM recipe WHERE recipe_id='$id'") or die('cannot delete'.mysql_error());
		header("location:admintask.php");
	}

	//updating recipe table
	else if(isset($_POST['update'])){
		$id=$_POST['txt_recipeid'];
		$recipefield=$_POST['txt_recipefield'];
		$recipevalue=$_POST['txt_recipevalue'];

		require 'connection.php';

		$query=mysql_query("UPDATE recipe SET $recipefield='$recipevalue' WHERE recipe_id='$id' ");
		header("location:admintask.php");
	}

	//admin inserting recipe
	else if(isset($_POST['insert'])){
		$id=$_POST['txt_recipeid'];
		$recipename=$_POST['txt_recipename'];
		$recipedate=$_POST['txt_recipedate'];
		$recipedescription=$_POST['txt_recipedescription'];
		$recipeingredients=$_POST['txt_recipeingredients'];
		$recipedirections=$_POST['txt_recipedirections'];
		$recipecategory=$_POST['txt_recipecategory'];
		$recipeyield=$_POST['txt_recipeyield'];
		$recipePreptime=$_POST['txt_recipepreptime'];
		$recipecooktime=$_POST['txt_recipecooktime'];
		$recipetotaltime=$_POST['txt_recipetotaltime'];
		$recipeurl1=$_POST['txt_recipeurl1'];
		$recipeurl2=$_POST['txt_recipeurl2'];
		$recipeurl3=$_POST['txt_recipeurl3'];
		$recipeurl4=$_POST['txt_recipeurl4'];
		$reciperegion=$_POST['txt_reciperegion'];


		require 'connection.php';

		$query=mysql_query("INSERT INTO recipe VALUES ('$id','$recipename','$recipedate','$reciperegion','$recipedescription','$recipeingredients','$recipeyield','$recipePreptime','$recipecooktime','$recipetotaltime','$recipedirections','$recipecategory','$recipeurl1','$recipeurl2','$recipeurl3','$recipeurl4','0');") or die('cannot enter data'.mysql_error());
		
			header('location:admintask.php');

	}

	else if(isset($_POST['deleteComment'])){
		$id=$_POST['txt_commentid'];

		require 'connection.php';

		$query=mysql_query("DELETE FROM comment WHERE comm_id='$id'") or die('cannot delete'.mysql_error());

		if(!$query){
			echo "error";
		}

		else {
			header('location:admintask.php');
		}

	}

?>