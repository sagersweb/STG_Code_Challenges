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
	<h3>Lorem Ipsum Generator</h3>
	<form action="results.php" method="post">
		<p>
			<label>Choose number of words to generate</label>
			<input type="text" name="numberofwords" value="1000" id="numberofwords" />
		</p>
		<p>
			<label>Select Lorem Ipsum type</label>
			<select name="ipsumtype" value="" id="ipsumtype">
				<option value="Lorem" title="Standard Lorem Ipsum text">Lorem Ipsum</option>
				<option value="Animal" title="Generate text using animal types">Animal Ipsum</option>
				<option value="Astronomy" title="Generate text using astronomy related words">Astronomy Ipsum</option>
				<option value="Buzzwords" title="Generate text using industry buzzwords">Buzzwords Ipsum</option>
				<option value="Cheese" title="Generate text using names of cheeses">Cheese Ipsum</option>
				<option value="Color" title="Generate text using colors">Color Ipsum</option>
				<option value="DrSeuss" title="Generate text using words from Dr. Seuss books">Dr. Seuss Ipsum</option>
				<option value="Farm" title="Generate text using words relating to farming">Farm Ipsum</option>
				<option value="Genesis" title="Generate text using words from the first chapter of Genesis in the Bible">Genesis Ipsum</option>
				<option value="Geography" title="Generate text using geography terms">Geography Ipsum</option>
				<option value="Insect" title="Generate text using insect names">Insect Ipsum</option>
				<option value="Math" title="Generate text using math terms">Math Ipsum</option>
				<option value="Medical" title="Generate text using medical terms">Medical Ipsum</option>
				<option value="Palindromes" title="Generate text using words that are palindromes">Palindromes Ipsum</option>
			</select>
		</p>
		<div id="infobox">
		Standard Lorem Ipsum text
		</div>
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