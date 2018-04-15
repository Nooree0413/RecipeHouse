<?php

include("functionGetTemp.php");

if(!empty($_GET['temperature'])){

	$tempFC=$_GET['temperature'];
	$convertedTemp=getTemperature($tempFC);
	
	deliver_response(200,"Temperature successful",$convertedTemp);
}
else{

	deliver_response(400,"Invalid Request-No value found",NULL);
}

function deliver_response($status,$status_message,$data){

	header("HTTP/1.1 $status $status_message");

	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;

	$json_response=json_encode($response);
	echo $json_response;
}


?>