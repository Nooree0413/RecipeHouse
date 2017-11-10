<?php
	$con = mysql_connect("localhost","root","") or die ("Could not connect" . mysql_error());
	
	mysql_select_db("recipehouse") or die ("Could not connect to database" . mysql_error());
	
	//echo "Connected Established!";
	
?>