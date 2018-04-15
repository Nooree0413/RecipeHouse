<!DOCTYPE html>
<head></head>
<body>
	
<form action='client.php' method='POST'>
Temperature:
<input type='text' name='temperature'>
<button type='submit' name='submit'>Fahrenheit To Celsius</button>
</form>


</body></html>

<?php
	
	if(isset($_POST['temperature'])){
		
		$tempFC=$_POST['temperature'];

		$url="http://localhost/RecipeHouse/rest/indexRest.php?temperature=" . $tempFC;
		$client=curl_init($url);

		curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
		
		$response=curl_exec($client);
		//echo $response;
		$result=json_decode($response);

		echo $result->data;
	}

?>
