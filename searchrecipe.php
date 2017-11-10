<?php
	require 'connection.php';

	if(!empty($_GET['q'])){

		$q=$_GET['q'];

	$checkRecipe=mysql_query("SELECT recipe_name FROM recipe WHERE recipe_name LIKE '%" . $q . "%'") or die('E');

	$noOfResult=mysql_num_rows($checkRecipe);

	if($noOfResult>0){
		echo $noOfResult." results for ".$q;

		while($result=mysql_fetch_array($checkRecipe)){
		echo $result['recipe_name'];
	}

}
	}
	else{
		echo"0 result for".$q;
	}

	

?>
