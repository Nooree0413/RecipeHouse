<?php
    require "connection.php";

  

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
        "<Recipe>".
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
        "<CommentCount>".$recipeCommentcount."</CommentCount></Recipe>";
    }

    $userXmlData .= "</Recipes>";

    $userXmlDataObject = simplexml_load_string($userXmlData) or die("Error: Cannot create object");
    $userXmlDataObject ->asXML("recipes.xml");

    ?>