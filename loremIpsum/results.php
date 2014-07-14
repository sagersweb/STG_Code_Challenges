<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lorem Ipsum Generator</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<?php require("functions.php"); ?>
</head>
<body>
<div class="results">
	<p style="text-align:center"><a href="index.php">Generate Another</a></p>
	<?php
	GenerateLorem($_POST["numberofwords"],$_POST["ipsumtype"]);
	?>
</div>
</body>
</html>