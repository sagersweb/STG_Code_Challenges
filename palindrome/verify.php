<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Verify Palindrome</title>
<?php

	function binarypalindrome($string){
		$tempArray = str_split(decbin($string));
		if ($tempArray === array_reverse($tempArray)){
			return true;
		}
			else return false;
		}
		
	function sanitize($string){
		$stripchars = array(" ",",","'","?",".");
		$string = strtolower(str_replace($stripchars, '', $string));
		return $string;
		}
		
	function palindrome($string){
		$string = sanitize($string);
		if(is_numeric($string)){
			return (binarypalindrome($string));
			}
		else{
		$tempArray = str_split($string);
		if ($tempArray === array_reverse($tempArray)){
			return true;
		}
			else return false;
		}
	}
?>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="result">
<?php
	
	$potential_palindrome = $_POST["potential_palindrome"];
	$sanitized_palindrome = sanitize($potential_palindrome);
	if(is_numeric($sanitized_palindrome)){
		echo("<h1>".$sanitized_palindrome . "<sub>10</sub> = " . decbin($sanitized_palindrome) . "<sub>2</sub></h1> and ");
		if(palindrome($sanitized_palindrome)){
			echo ("is");
			}
			else{
			echo ("is not");
			}
		echo(" a palindrome");
		}
	else
	{
		if (palindrome($sanitized_palindrome)){
			echo($potential_palindrome . "<br /> is a palindrome");
		}
		else{
			echo($potential_palindrome . "<br /> is not a palindrome");
		}
	}
		echo("<br /><br /><a href='index.php'>Enter new word or phrase &raquo;</a>");
?>
</div>
</body>
</html>