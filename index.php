<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>STG Code Challenge Examples</title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css">
</head>

<body>
<h1>STG Code Challenge Examples</h1>
<div>
	<ul>
		<?php
	if ($handle = opendir('.')) {
		while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != ".." && $entry != ".git" && $entry != "index.php" && $entry != "css" && $entry != "font-awesome") {
				echo ("<li>");
				if (is_dir($entry)){
					echo('<a href=' . $entry . '><span class="fa fa-folder"></span> ' . strtolower($entry) . "</a> <span class='dateModified'>" . date("m/d/Y",filemtime($entry)) . "</span>");
					}
				elseif(is_file($entry)){
					echo('<a href=' . $entry . '><span class="fa fa-file-code-o"></span> ' . strtolower($entry) . "</a> <span class='dateModified'>" . date("m/d/Y",filemtime($entry)) . "</span>");
					}
				echo ("");
				echo ("</li>");
			}
		}
		closedir($handle);
	}
	?>
	</ul>
</div>
</body>
</html>
