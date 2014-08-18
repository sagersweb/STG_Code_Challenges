<?php
function factorial($number){
	if ($number==1)
		return 1;
	else
		return ($number*factorial($number-1));
	}
	
$number=$_REQUEST["number"];
	if($number==0){
		echo 1;
		}
	elseif(($number>170) || ($number < 0)){
		echo("NULL");
	}
	else{
		echo factorial($number);
	}
?>