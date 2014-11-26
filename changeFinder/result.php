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
			$currencyinput = $_POST['currency'];
			$initialamount = $_POST['currency'];
			//findChange($currencyinput);
			$currency = findChange($currencyinput);
			showChange($currency,$initialamount);
		?>
	</div>
	<div class="button"><a href="index.php">Find Change Again &raquo;</a></div>
</body>
</html>