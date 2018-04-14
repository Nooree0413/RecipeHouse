<!DOCTYPE html>
<head></head>
<body>
	
<form action='client.php' method='POST'>
Temperature:
<input type='text' name='temperature'>"
<button type='submit' name='submit'>Fahenreit To Celcious</button>"
</form>"


</body></html>

<?php
	
	if(isset($_POST['submit'])){

		$tempFC=$_POST['temperature'];

		$url="http://localhost/web/RecipeHouse/rest/$tempFC";
		$client=curl_init($url);

		curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
		
		$response=curl_exec($client);

		$result=json_decode($response);

		echo $result->data;
	}

?>
