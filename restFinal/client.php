

<?php
require "api.php";

	if(isset($_POST['submit'])){

		$name=$_POST['name'];
		$url="http://localhost/web/RecipeHouse/restFinal/api/".$name;

		$client=curl_init($url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

		$response=curl_exec($client);

		$result=json_decode($response);

		if($result!=''){

			print'<table border="1">';
			print"<tr><td>Name</td><td>Surname</td><td>Email</td></tr>";

			echo $result->data;
			echo"</table>";
		}
	}
	?>

