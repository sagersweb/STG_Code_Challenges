<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Finder</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<?php include('functions.php'); ?>
</head>
<body>
	<div class="results">
		<?php
			$currencyinput = $_POST['currency'];
			$currency = findChange($currencyinput);
			for($x=0;$x < count($currency);$x++){
				switch($x){
					case 0:
						for ($y=1; $y<=$currency[$x]; $y++){
							echo("<img src='images/hundreds.png' />");
						}
					break;
					case 1:
						for ($y=1; $y<=$currency[$x]; $y++){
							echo("<img src='images/fifties.jpg' />");
						}
					break;
					case 2:
						for ($y=1; $y<=$currency[$x]; $y++){
							echo("<img src='images/twenties.jpg' />");
						}
					break;
					case 3:
						for ($y=1; $y<=$currency[$x]; $y++){
							echo("<img src='images/tens.jpg' />");
						}
					break;
					case 4:
						for ($y=1; $y<=$currency[$x]; $y++){
							echo("<img src='images/fives.jpg' />");
						}
					break;
					case 5:
						for ($y=1; $y<=$currency[$x]; $y++){
							echo("<img src='images/ones.jpg' />");
						}
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
		?>
	</div>
	<div style="text-align:center;"><a href="index.php">Find Change Again &raquo;</a></div>
</body>
</html>