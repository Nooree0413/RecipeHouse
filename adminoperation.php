<?php
require 'connection.php';

	//deleting user
	if(isset($_POST['delete'])){
		$email=$_POST['txt_mail'];
		require 'connection.php';

		$query=mysql_query("DELETE FROM register WHERE reg_email='$email'") or die('cannot delete'.mysql_error());

		echo"Successfully deleted";

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
	

		header("location:admintask.php");
	}

	//deleting recipe
	else if(isset($_POST['Deleterep'])){
		$id=$_POST['txt_recipeid'];

		require 'connection.php';
		$query=mysql_query("DELETE FROM recipe WHERE recipe_id='$id'") or die('cannot delete'.mysql_error());

		$userQuery = "SELECT * FROM recipe";
    $userQueryResult = mysql_query($userQuery) or die ('Query Failed' . mysql_error());

    $userXmlData = "<?xml version='1.0' encoding='UTF-8'?>
    <Recipes>";

    while ($row = mysql_fetch_array($userQueryResult))
    {
        $recipeId = $row['recipe_id'];
        $recipeName = $row['recipe_name'];
        $recipeDate = $row['recipe_date'];
        $recipeRegion = $row['recipe_region'];
        $recipeDescription = $row['recipe_description'];
        $recipeIngredients = $row['recipe_ingredients'];
        $recipeYield = $row['recipe_yield'];
        $recipePreptime = $row['recipe_preptime'];
        $recipeCooktime = $row['recipe_cooktime'];
        $recipeTotaltime = $row['recipe_totaltime'];
        $recipeDirections = $row['recipe_directions'];
        $recipeCategory = $row['recipe_category'];
        $recipeImgurl1 = $row['recipe_imgurl1'];
        $recipeImgurl2 = $row['recipe_imgurl2'];
        $recipeImgurl3 = $row['recipe_imgurl3'];
        $recipeImgurl4 = $row['recipe_imgurl4'];
        $recipeCommentcount = $row['rec_commentcount'];

        $userXmlData .= 
        "<RecipeDetails>".
        "<Id>".$recipeId ."</Id>".
        "<Name>".$recipeName."</Name>".
        "<Date>".$recipeDate."</Date>".
        "<Region>".$recipeRegion."</Region>".
        "<Description>".$recipeDescription ."</Description>".
        "<Ingredients>".$recipeIngredients."</Ingredients>".
        "<Yield>".$recipeYield."</Yield>".
        "<PreparationTime>".$recipePreptime."</PreparationTime>".
        "<CookingTime>".$recipeCooktime."</CookingTime>".
        "<TotalTime>".$recipeTotaltime."</TotalTime>".
        "<Directions>".$recipeDirections."</Directions>".
        "<Category>".$recipeCategory."</Category>".
        "<ImageUrlOne>".$recipeImgurl1."</ImageUrlOne>".
        "<ImageUrlTwo>".$recipeImgurl2."</ImageUrlTwo>".
        "<ImageUrlThree>".$recipeImgurl3."</ImageUrlThree>".
        "<ImageUrlFour>".$recipeImgurl4."</ImageUrlFour>".
        "<CommentCount>".$recipeCommentcount."</CommentCount></RecipeDetails>";
    }

    $userXmlData .= "</Recipes>";

    $userXmlDataObject = simplexml_load_string($userXmlData) or die("Error: Cannot create object");
    $userXmlDataObject ->asXML("recipes.xml");


		header("location:admintask.php");
	}

	//updating recipe table
	else if(isset($_POST['update'])){
		$id=$_POST['txt_recipeid'];
		$recipefield=$_POST['txt_recipefield'];
		$recipevalue=$_POST['txt_recipevalue'];

		require 'connection.php';

		$query=mysql_query("UPDATE recipe SET $recipefield='$recipevalue' WHERE recipe_id='$id' ");

		$userQuery = "SELECT * FROM recipe";
    $userQueryResult = mysql_query($userQuery) or die ('Query Failed' . mysql_error());

    $userXmlData = "<?xml version='1.0' encoding='UTF-8'?>
    <Recipes>";

    while ($row = mysql_fetch_array($userQueryResult))
    {
        $recipeId = $row['recipe_id'];
        $recipeName = $row['recipe_name'];
        $recipeDate = $row['recipe_date'];
        $recipeRegion = $row['recipe_region'];
        $recipeDescription = $row['recipe_description'];
        $recipeIngredients = $row['recipe_ingredients'];
        $recipeYield = $row['recipe_yield'];
        $recipePreptime = $row['recipe_preptime'];
        $recipeCooktime = $row['recipe_cooktime'];
        $recipeTotaltime = $row['recipe_totaltime'];
        $recipeDirections = $row['recipe_directions'];
        $recipeCategory = $row['recipe_category'];
        $recipeImgurl1 = $row['recipe_imgurl1'];
        $recipeImgurl2 = $row['recipe_imgurl2'];
        $recipeImgurl3 = $row['recipe_imgurl3'];
        $recipeImgurl4 = $row['recipe_imgurl4'];
        $recipeCommentcount = $row['rec_commentcount'];

        $userXmlData .= 
        "<RecipeDetails>".
        "<Id>".$recipeId ."</Id>".
        "<Name>".$recipeName."</Name>".
        "<Date>".$recipeDate."</Date>".
        "<Region>".$recipeRegion."</Region>".
        "<Description>".$recipeDescription ."</Description>".
        "<Ingredients>".$recipeIngredients."</Ingredients>".
        "<Yield>".$recipeYield."</Yield>".
        "<PreparationTime>".$recipePreptime."</PreparationTime>".
        "<CookingTime>".$recipeCooktime."</CookingTime>".
        "<TotalTime>".$recipeTotaltime."</TotalTime>".
        "<Directions>".$recipeDirections."</Directions>".
        "<Category>".$recipeCategory."</Category>".
        "<ImageUrlOne>".$recipeImgurl1."</ImageUrlOne>".
        "<ImageUrlTwo>".$recipeImgurl2."</ImageUrlTwo>".
        "<ImageUrlThree>".$recipeImgurl3."</ImageUrlThree>".
        "<ImageUrlFour>".$recipeImgurl4."</ImageUrlFour>".
        "<CommentCount>".$recipeCommentcount."</CommentCount></RecipeDetails>";
    }

    $userXmlData .= "</Recipes>";

    $userXmlDataObject = simplexml_load_string($userXmlData) or die("Error: Cannot create object");
    $userXmlDataObject ->asXML("recipes.xml");


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


			$userQuery = "SELECT * FROM recipe";
    $userQueryResult = mysql_query($userQuery) or die ('Query Failed' . mysql_error());

    $userXmlData = "<?xml version='1.0' encoding='UTF-8'?>
    <Recipes>";

    while ($row = mysql_fetch_array($userQueryResult))
    {
        $recipeId = $row['recipe_id'];
        $recipeName = $row['recipe_name'];
        $recipeDate = $row['recipe_date'];
        $recipeRegion = $row['recipe_region'];
        $recipeDescription = $row['recipe_description'];
        $recipeIngredients = $row['recipe_ingredients'];
        $recipeYield = $row['recipe_yield'];
        $recipePreptime = $row['recipe_preptime'];
        $recipeCooktime = $row['recipe_cooktime'];
        $recipeTotaltime = $row['recipe_totaltime'];
        $recipeDirections = $row['recipe_directions'];
        $recipeCategory = $row['recipe_category'];
        $recipeImgurl1 = $row['recipe_imgurl1'];
        $recipeImgurl2 = $row['recipe_imgurl2'];
        $recipeImgurl3 = $row['recipe_imgurl3'];
        $recipeImgurl4 = $row['recipe_imgurl4'];
        $recipeCommentcount = $row['rec_commentcount'];

        $userXmlData .= 
        "<RecipeDetails>".
        "<Id>".$recipeId ."</Id>".
        "<Name>".$recipeName."</Name>".
        "<Date>".$recipeDate."</Date>".
        "<Region>".$recipeRegion."</Region>".
        "<Description>".$recipeDescription ."</Description>".
        "<Ingredients>".$recipeIngredients."</Ingredients>".
        "<Yield>".$recipeYield."</Yield>".
        "<PreparationTime>".$recipePreptime."</PreparationTime>".
        "<CookingTime>".$recipeCooktime."</CookingTime>".
        "<TotalTime>".$recipeTotaltime."</TotalTime>".
        "<Directions>".$recipeDirections."</Directions>".
        "<Category>".$recipeCategory."</Category>".
        "<ImageUrlOne>".$recipeImgurl1."</ImageUrlOne>".
        "<ImageUrlTwo>".$recipeImgurl2."</ImageUrlTwo>".
        "<ImageUrlThree>".$recipeImgurl3."</ImageUrlThree>".
        "<ImageUrlFour>".$recipeImgurl4."</ImageUrlFour>".
        "<CommentCount>".$recipeCommentcount."</CommentCount></RecipeDetails>";
    }

    $userXmlData .= "</Recipes>";

    $userXmlDataObject = simplexml_load_string($userXmlData) or die("Error: Cannot create object");
    $userXmlDataObject ->asXML("recipes.xml");

		
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