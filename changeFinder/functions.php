<?php
function findChange($number){
	$hundreds=$fiftys=$twenties=$tens=$fives=$ones=$quarters=$dimes=$nickels=$pennies=0;
	// Assume $1, $5, $10, $20, $50, $100 bills and penny, nickel, dime, quarter coins for the denominations.
	while($number >= 100){
		$hundreds += 1;
		$number = round($number - 100, 2);
		/* echo($number . "<br />"); */
	}
	while($number >= 50){
		$fiftys += 1;
		$number = round($number - 50, 2);
		/* echo($number . "<br />"); */
	}
	while($number >= 20){
		$twenties += 1;
		$number = round($number - 20, 2);
		/* echo($number . "<br />"); */
	}
	while($number >= 10){
		$tens += 1;
		$number = round($number - 10, 2);
		/* echo($number . "<br />"); */
	}
	while($number >= 5){
		$fives += 1;
		$number = round($number - 5, 2);
		/* echo($number . "<br />"); */
	}
	while($number >= 1){
		$ones += 1;
		$number = round($number - 1, 2);
		/* echo($number . "<br />"); */
	}
	while($number >= 0.25){
		$quarters += 1;
		$number = round($number - 0.25, 2);
		/* echo($number . "<br />"); */
	}
	while($number >= 0.10){
		$dimes += 1;
		$number = round($number - 0.10, 2);
		/* echo($number . "<br />"); */
	}
	while($number >= 0.05){
		$nickels += 1;
		$number = round($number - 0.05, 2);
		/* echo($number . "<br />"); */
	}
	while($number > 0){
		$pennies += 1;
		$number = round($number - 0.01, 2);
		/* echo($number . "<br />"); */
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

function showChange($currency,$number){
	echo("<h3>$".$number."</h3>");
	for($x=0;$x < count($currency);$x++){
		if($currency[$x] != 0){
		switch($x){
			case 0:
				echo("<div class='hundreds bills'>");
				echo("<img src='images/hundreds.jpg' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			case 1:
				echo("<div class='fifties bills'>");
				echo("<img src='images/fifties.jpg' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			case 2:
				echo("<div class='twenties bills'>");
				echo("<img src='images/twenties.jpg' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			case 3:
				echo("<div class='tens bills'>");
				echo("<img src='images/tens.jpg' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			case 4:
				echo("<div class='fives bills'>");
				echo("<img src='images/fives.jpg' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			case 5:
				echo("<div class='ones bills'>");
				echo("<img src='images/ones.jpg' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			case 6:
				echo("<div class='quarters coins'>");
				echo("<img src='images/quarters.png' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			case 7:
				echo("<div class='dimes coins'>");
				echo("<img src='images/dimes.png' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			case 8:
				echo("<div class='nickels coins'>");
				echo("<img src='images/nickels.png' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			case 9:
				echo("<div class='pennies coins'>");
				echo("<img src='images/pennies.png' />");
				echo("<span>" . $currency[$x] . "</span>");
				echo("</div>");
			break;
			default:
			}
		}
	}
}

function displayMoney($currency){
	for($x=0;$x < count($currency);$x++){
		switch($x){
			case 0:
				$offset = 0;
				echo("<div class='hundreds'>");
					for ($y=1; $y<=$currency[$x]; $y++){
						echo("<img src='images/hundreds.jpg' style='position:absolute; top:".$offset."px' />");
						$offset +=10;
					}
				echo("</div>");
			break;
			case 1:
				$offset = 0;
				echo("<div class='fifties'>");
					for ($y=1; $y<=$currency[$x]; $y++){
						echo("<img src='images/fifties.jpg' style='position:absolute; top:".$offset."px' />");
						$offset +=10;
					}
				echo("</div>");
			break;
			case 2:
			$offset = 0;
				echo("<div class='twenties'>");
				for ($y=1; $y<=$currency[$x]; $y++){
					echo("<img src='images/twenties.jpg' style='position:absolute; top:".$offset."px' />");
						$offset +=10;
					}
				echo("</div>");
			break;
			case 3:
			$offset = 0;
				echo("<div class='tens'>");
				for ($y=1; $y<=$currency[$x]; $y++){
					echo("<img src='images/tens.jpg' style='position:absolute; top:".$offset."px' />");
						$offset +=10;
					}
				echo("</div>");
			break;
			case 4:
			$offset = 0;
				echo("<div class='fives'>");
				for ($y=1; $y<=$currency[$x]; $y++){
					echo("<img src='images/fives.jpg' style='position:absolute; top:".$offset."px' />");
						$offset +=10;
					}
				echo("</div>");
			break;
			case 5:
			$offset = 0;
				echo("<div class='ones'>");
				for ($y=1; $y<=$currency[$x]; $y++){
					echo("<img src='images/ones.jpg' style='position:absolute; top:".$offset."px' />");
						$offset +=10;
					}
				echo("</div>");
			break;
			case 6:
				for ($y=1; $y<=$currency[$x]; $y++){
					echo("<img src='images/quarters.png' />");
				}
			break;
			case 7:
				for ($y=1; $y<=$currency[$x]; $y++){
					echo("<img src='images/dimes.png' />");
				}
			break;
			case 8:
				for ($y=1; $y<=$currency[$x]; $y++){
					echo("<img src='images/nickels.png' />");
				}
			break;
			case 9:
				for ($y=1; $y<=$currency[$x]; $y++){
					echo("<img src='images/pennies.png' />");
				}
			break;
			default:
			}
		}	
}
?>