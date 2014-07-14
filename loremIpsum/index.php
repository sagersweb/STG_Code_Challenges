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
	<form action="results.php" method="post">
		<p>
			<label>Choose number of words to generate</label>
			<input type="text" name="numberofwords" value="1000" id="numberofwords" />
		</p>
		<p>
			<label>Select LoremIpsum type</label>
			<select name="ipsumtype" value="" id="ipsumtype">
				<option value="LoremIpsum">Lorem Ipsum</option>
				<option value="AnimalIpsum">Animal Ipsum</option>
				<option value="CheeseIpsum">Cheese Ipsum</option>
				<option value="ColorIpsum">Color Ipsum</option>
				<option value="GeographyIpsum">Geography Ipsum</option>
				<option value="MathIpsum">Math Ipsum</option>
				<option value="MedicalIpsum">Medical Ipsum</option>
				<option value="PsychologicalIpsum">Pyschological Ipsum</option>
			</select>
		</p>
		<input type="Submit" name="Submit" value="Submit" id="Submit" />
	</form>
</div>
</body>
</html>