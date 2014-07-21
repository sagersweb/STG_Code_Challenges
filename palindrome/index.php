<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Palindrome Checker</title>
<?php

	function binarypalindrome($string){
		$tempArray = str_split(decbin($string));
		if ($tempArray === array_reverse($tempArray)){
			return true;
		}
			else return false;
		}
		
	function palindrome($string){
		$stripchars = array(" ",",","'","?",".");
		$string = strtolower(str_replace($stripchars, '', $string));
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
<div><h1>Palindrome Checker</h1>
	<p>This verifies if a string is a palindrome.<br>
<small>Spaces and sentence punctuation are inconsequential.<br>
If a number is input, it will check to see if it a binary palindrome (3 = 11)</small></p>
		<form action="verify.php" method="post">
		<label>Enter a word or phrase<br />
		<input type="text" name="potential_palindrome" value="" id="potential_palindrome" /><br />
		<input type="Submit" name="Submit" value="Submit" id="Submit" />
		</form>
</div>
</body>
</html>