<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>C&aelig;sar Cipher</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="inputarea">
	<p>This encrypts / decrypts a string using a simple C&aelig;sar cipher:</p>
		<form action="result.php" method="post">
		<label><p>Enter a string to Encrypt / Decrypt</p></label>
		<textarea name="string_enc_dec" value="" id="string_enc_dec"></textarea><br>
		<input type="submit" name="selection" value="Encrypt" id="Encrypt" onClick="this.submit()" /> <input type="submit" name="selection" value="Decrypt" id="Decrypt" onClick="this.submit()" />
		</form>
</div>
</body>
</html>