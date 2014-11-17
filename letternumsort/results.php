<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sorted Array</title>
<?php

	$input = $_GET['arrayinput'];
	
	function sanitize($inputdata){
		$inputasarray = str_split($inputdata);		
		for($x=0;$x<count($inputasarray);$x++){
			if(ctype_alnum($inputasarray[$x])==false){
				if($inputasarray[$x]!=","){
					array_splice ($inputasarray, $x, 1);
				}
			}
		}
		$inputdata = implode("",$inputasarray);
		$inputdata = explode(",",$inputdata);
		return $inputdata;
	}
	
	function sortArray($array){
		sort($array,SORT_NATURAL);
		return($array);
		}
	
?>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
	$sanitized = sanitize($input);
	?>
<div class="resultbox">
	<div class="leftcol">
	<h4>Original</h4>
	<?php
		echo("<p>" . $input . "</p>");
	?>
	</div>
	<div class="midcol">
	<h4>Sanitized</h4>
		<ul>
			<?php
			for($x=0;$x<count($sanitized);$x++){
				echo("<li>".$sanitized[$x]."</li>");
				}
			?>
		</ul>
	</div>
	<div class="rightcol">
	<h4>Sorted</h4>
		<ul>
			<?php
			$sorted = sortArray($sanitized);
			for($y=0;$y<count($sorted);$y++){
				echo("<li>".$sorted[$y]."</li>");
				}
	?>
		</ul>
	</div>
</div>
</body>
</html>