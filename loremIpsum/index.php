<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lorem Ipsum Generator</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<br>
<?php require("functions.php"); ?>
</head>
<body>
<div class="input">
	<h3>Lorem Ipsum Generator</h3>
	<form action="results.php" method="post">
		<p>
			<label>Choose number of words to generate</label>
			<input type="text" name="numberofwords" value="1000" id="numberofwords" />
		</p>
		<p>
			<label>Select Lorem Ipsum type</label>
			<select name="ipsumtype" value="" id="ipsumtype">
				<option value="Lorem">Lorem Ipsum</option>
				<option value="Animal">Animal Ipsum</option>
				<option value="Astronomy">Astronomy Ipsum</option>
				<option value="Buzzwords">Buzzwords Ipsum</option>
				<option value="Cheese">Cheese Ipsum</option>
				<option value="Color">Color Ipsum</option>
				<option value="DrSeuss">Dr. Seuss Ipsum</option>
				<option value="Farm">Farm Ipsum</option>
				<option value="Genesis">Genesis Ipsum</option>
				<option value="Geography">Geography Ipsum</option>
				<option value="Insect">Insect Ipsum</option>
				<option value="Math">Math Ipsum</option>
				<option value="Medical">Medical Ipsum</option>
				<option value="Palindromes">Palindromes Ipsum</option>
				<option value="Psychological">Pyschological Ipsum</option>
			</select>
		</p>
		<input type="Submit" name="Submit" value="Submit" id="Submit" />
	</form>
</div>
</body>
</html>