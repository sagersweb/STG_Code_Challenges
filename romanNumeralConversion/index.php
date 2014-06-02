<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alphanumeric Sum</title>
	<?php
	function verifyRoman($romannumeral){
		$anstoArray = str_split($romannumeral);
		for ($x=0; $x < count($anstoArray); $x++){
				switch($anstoArray[$x]){
					case "M":
					case "D":
					case "C":
					case "L":
					case "X":
					case "V":
					case "I":
						$currentVal = true;
						break;
					default:
						return false;
			}
		}
		return ($currentVal);
	}	
	function convertRomanNumeral($romannumeral){
		$romannumeral = strtoupper($romannumeral);
		if (verifyRoman($romannumeral)){
			$decimalValue=0;
			$anstoArray = str_split($romannumeral);
			for ($x=0; $x < count($anstoArray); $x++){	
			switch($anstoArray[$x]){
					case "M":
						$decimalArray[$x] = 1000;
						break;
					case "D":
						$decimalArray[$x] = 500;
						break;					
					case "C":
						$decimalArray[$x] = 100;
						break;					
					case "L":
						$decimalArray[$x] = 50;
						break;
					case "X":
						$decimalArray[$x] = 10;
						break;
					case "V":
						$decimalArray[$x] = 5;
						break;
					case "I":
						$decimalArray[$x] = 1;
						break;
					default:
						$decimalArray[$x] = 0;
				}
			}
			
			for ($x=0; $x < count($anstoArray); $x++){
				if ($x<count($anstoArray)-1){
					if($decimalArray[$x] >= $decimalArray[$x + 1]){
						$decimalValue+=$decimalArray[$x];
						}
					if($decimalArray[$x] < $decimalArray[$x + 1]){
						$decimalValue-=$decimalArray[$x];
						}		
				}
				else{
					$decimalValue+=$decimalArray[$x];
					}
			}
			echo("<p><em>" .$romannumeral . "</em><br />as a decimal is<br /><em>" . $decimalValue . "</em></p>");
		}
		else{
			echo("<p>Sorry,<br /><em>" . $romannumeral . "</em><br />is not a valid Roman Numeral</p>");		
			}
			?>
			
				<form action="index.php" method="post">
				<label>Enter a Roman Numeral<br>
						<em>(for example: MCMXII)</em></label>
				<input type="text" name="romanNumeral" value="" id="romanNumeral" /><br>
				<input type="Submit" name="Submit" value="Submit" id="Submit" />
				</form>
		
			<?php	
	}
	?>
	<style type="text/css">
		html, body{
			margin:0px;
			padding:0px;
			font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
			color:#333;
			background-color:#999;
			}
		div{
			width:320px;
			margin:50px auto;
			border:1px solid #000000;
			padding:20px;
			background-color:#FFF;
			text-align:center;
			}
		span{
			display:block;
			font-weight:bold;
			margin-top:15px;
			}
	</style>
</head>

<body>
<div>
	<?php
		if(isset($_POST["Submit"])){
		echo(convertRomanNumeral($_POST["romanNumeral"]));
		}
	else{
		?>
		<form action="index.php" method="post">
		<label>Enter a Roman Numeral<br>
				<em>(for example: MCMXII)</em></label>
		<input type="text" name="romanNumeral" value="" id="romanNumeral" /><br>
		<input type="Submit" name="Submit" value="Submit" id="Submit" />
		</form>
		<?php
		}	
	?>
</div>
</body>
</html>