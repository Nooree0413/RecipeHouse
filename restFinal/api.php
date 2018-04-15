<?php

	header("Content-Type:application/json");
	require "data.php";

	if(!empty($_GET['name'])){

		$name=$_GET['name'];
		$user=getUser($name);

		if(empty($user)){
			deliver_response(200,"user not found",NULL);
		}
		else{
			deliver_response(200,"User found",$user);
		}
	}

	else{
		deliver_response(400,"Invalid Request",NULL);
	}

	function deliver_response($status,$status_message,$data){

	header("HTTP/1.1 ".$status);

	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;

	$json_response=json_encode($response);
	echo $json_response;
}

?>


