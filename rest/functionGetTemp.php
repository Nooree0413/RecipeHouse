<?php

	function getTemperature($find){



		$convertedTemp=($find-32)*(5/9);
		

		$temp=array($find=>$convertedTemp);

		foreach($temp as $temp=>$convertedTemp){

			if($temp==$find)
				return $convertedTemp;
			break;
		}

	}

?>