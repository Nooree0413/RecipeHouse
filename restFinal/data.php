<?php
	function db_connect(){

		$dbname="localhost";
		$username="root";
		$password='';
		$con=mysql_connect("localhost",$username,$password);

		if(!$con){

			echo"Big problem";
		}
		else{

			mysql_select_db("recipehouse",$con);
		}
	}

	function getUser($name){

		$pdo=db_connect();
		$queryType='';
		$query='';

		if($name!='')
			$queryType="reg_fname='$name'";
		$query=$queryType;

		$sql="select * from recipehouse.register where $query";

		$ret='';
		$result=mysql_query($sql);

		while($row=mysql_fetch_array($result)){

			$fn=$row['reg_fname'];
			$sn=$row['reg_lname'];
			$email=$row['reg_email'];

			$ret .="<tr><td>$fn</td>";
			$ret .="<td>$sn</td>";
			$ret .="<td></td></tr>";
		}

		return $ret;
		break;
	}
?>