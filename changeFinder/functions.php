<?php
function findChange($number){
	$hundreds=$fiftys=$twenties=$tens=$fives=$ones=$quarters=$dimes=$nickels=$pennies=0;
	// Assume $1, $5, $10, $20, $50, $100 bills and penny, nickel, dime, quarter coins for the denominations.
	while($number >= 100){
		$hundreds += 1;
		$number -= 100;
	}
	while($number >= 50){
		$fiftys += 1;
		$number -= 50;
	}
	while($number >= 20){
		$twenties += 1;
		$number -= 20;
	}
	while($number >= 10){
		$tens += 1;
		$number -= 10;
	}
	while($number >= 5){
		$fives += 1;
		$number -= 5;
	}
	while($number >= 1){
		$ones += 1;
		$number -= 1;
	}
	while($number >= 0.25){
		$quarters += 1;
		$number -= 0.25;
	}
	while($number >= 0.10){
		$dimes += 1;
		$number -= 0.10;
	}
	while($number >= 0.05){
		$nickels += 1;
		$number -= 0.05;
	}
	while($number >= 0){
		$pennies += 1;
		$number -= 0.01;
	}
	$amount = array($hundreds,$fiftys,$twenties,$tens,$fives,$ones,$quarters,$dimes,$nickels,$pennies);
/*	echo($hundreds);
	echo($fiftys);
	echo($twenties);
	echo($tens);
	echo($fives);
	echo($ones);
	echo($quarters);
	echo($dimes);
	echo($nickels);
	echo($pennies);*/
	return($amount);
}
?>