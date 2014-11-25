<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Finder</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<?php include('functions.php'); ?>
</head>
<body>
	<div class="results">
		<?php
			$currency = $_POST['currency'];
			print_r(findChange($currency));
		?>
	</div>
	<div style="text-align:center;"><a href="index.php">Find Change Again &raquo;</a></div>
</body>
</html>