<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Parenthesis Checker</title>
<?php

	// $string = "((x+y (3x-2)) * (z^2 - 1) * (x + z))";

	function checkParenthesisMatch($string){
		$leftparen = $rightparen = 0;
		$testArray = str_split($string);
		for($x=0;$x<count($testArray);$x++){
			if ($testArray[$x] == "("){
				$leftparen++;
				}
			if ($testArray[$x] == ")"){
				$rightparen++;
				}		
			}
			
			if($leftparen==$rightparen){
				return true;
				}
			else return false;		
		}
?>

<style type="text/css">
		html, body{
			margin:0px;
			padding:0px;
			font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
			color:#333;
			background-color:#999;
			line-height:1.6em;
			}
		div{
			width:520px;
			margin:50px auto;
			border:1px solid #000000;
			padding:20px;
			background-color:#FFF;
			text-align:center;
			}
			
		input{
			font-size:16px;
			font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
			margin-bottom:10px;
			}	
	</style>
</head>

<body>
<div>
	<p>This verifies that a given mathmatical equation has matching parenthesis and brackets (though the equation is could still be invalid):</p>
	<?php
		if(isset($_POST["Submit"])){
			if(checkParenthesisMatch($_POST["mathEquation"])){
					echo($_POST["mathEquation"] . "<br /> has matching parenthesis");
				}
				else{
					echo($_POST["mathEquation"] . "<br /> does not have matching parenthesis");
				}
				echo("<br /><a href='index.php'>Enter new equation &raquo;</a>");
		}
	else{
		?>
		<form action="index.php" method="post">
		<label>Enter a Math Equation<br>
				<em>for example: ((x+y(3x-2))*(z^2-1)*(x+z))</em></label><br />
		<input type="text" name="mathEquation" value="" id="mathEquation" /><br />
		<input type="Submit" name="Submit" value="Submit" id="Submit" />
		</form>
		<?php
		}	
	?>
</div>
</body>
</html>