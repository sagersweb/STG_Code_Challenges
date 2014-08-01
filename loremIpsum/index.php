<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lorem Ipsum Generator</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<?php require("functions.php"); ?>
</head>
<body>
<div class="input">
	<h3>Lorem Ipsum (Filler Text) Generator</h3>
	<p>This tool will generate paragraphs of random length.</p>
	<form action="results.php" method="post">
		<p>
			<label>Number of words to generate</label>
			<input type="text" name="numberofwords" value="1000" id="numberofwords" />
		</p>
		<p>
			<label>Select filler text type</label>
			<select name="ipsumtype" value="" id="ipsumtype">
				<option value="Lorem" title="Standard Lorem Ipsum text">Lorem Ipsum</option>
				<option value="Animal" title="Generate text using animal types">Animal Words</option>
				<option value="Astronomy" title="Generate text using astronomy related words">Astronomy Terms</option>
				<option value="Buzzwords" title="Generate text using industry buzzwords">Buzzwords</option>
				<option value="Carparts" title="Generate text using car parts">Car parts</option>
				<option value="Cheese" title="Generate text using names of cheeses">Cheese Types</option>
				<option value="Color" title="Generate text using colors">Colors</option><option value="Constitution" title="Generate text using words from the US Constitution">Constitution</option>
				<option value="DrSeuss" title="Generate text using words from Dr. Seuss books">Dr. Seuss words</option>
				<option value="Emotions" title="Generate text using emotions">Emotions</option>
				<option value="Farm" title="Generate text using words relating to farming">Farming words</option>
				<option value="Flowers" title="Generate text using flower names">Flowers</option>
				<option value="Genesis" title="Generate text using words from the first chapter of Genesis in the Bible">Genesis</option>
				<option value="Geography" title="Generate text using geography terms">Geographical terms</option>
				<option value="Harrypotter" title="Generate text using words from 'Harry Potter and the Sorcerer's Stone'">Harry Potter words</option>
				<option value="Herbsandspices" title="Generate text using herbs and spices">Herbs and spices</option>
				<option value="Insect" title="Generate text using insect names">Insect types</option>
				<option value="Math" title="Generate text using math terms">Math words</option>
				<option value="Medical" title="Generate text using medical terms">Medical terms</option>
				<option value="Music" title="Generate text using musical terms">Musical terms</option>
				<option value="Palindromes" title="Generate text using words that are palindromes">Palindromes</option>
			</select>
		</p>
		<div id="infobox"> Standard Lorem Ipsum text </div>
		<input type="Submit" name="Submit" value="Submit" id="Submit" />
	</form>
</div>
<script>
$(document).ready(function(){
	$("#ipsumtype").change(function() {
		$("#infobox").html(($("#ipsumtype").find("option:selected").attr("title")));
	});
	$("#ipsumtype").keyup(function() {
		$("#infobox").html(($("#ipsumtype").find("option:selected").attr("title")));
	});
});
</script>
</body>
</html>