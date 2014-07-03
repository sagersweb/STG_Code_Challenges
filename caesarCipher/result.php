<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>C&aelig;sar Cipher</title>
	<?php
	function encrypt($string_to_encrypt){
		$encArray = str_split($string_to_encrypt);
		for ($x=0; $x < count($encArray); $x++){
			if(ord($encArray[$x])=="32"){
				$encArray[$x]=" ";
			}
			else{
				if(ord($encArray[$x])+3 >= 126){
					$encArray[$x]=chr(ord($encArray[$x])-93);
				}
				$encArray[$x]=chr(ord($encArray[$x])+3);
			}
		}
		$encryptedString=implode("",$encArray);
		return ($encryptedString);
	}
	
	function decrypt($string_to_encrypt){
		$decArray = str_split($string_to_encrypt);
		for ($x=0; $x < count($decArray); $x++){
			if(ord($decArray[$x])=="32"){
				$decArray[$x]=" ";
			}
			else{
				if(ord($decArray[$x])-3 <= 32){
					$decArray[$x]=chr(ord($decArray[$x])+93);
				}
				$decArray[$x]=chr(ord($decArray[$x])-3);
			}
		}
		$decryptedString=implode("",$decArray);
		return ($decryptedString);
	}		
	?>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div>
		<?php
			if($_POST['selection']=="Encrypt"){
				echo("<div class='results'><h1>Input String</h1>");
				echo($_POST['string_enc_dec']);
				echo("</div>");
				echo("<div class='results'><h1>Encrypted String</h1>");
				echo(encrypt($_POST['string_enc_dec']));
				echo("</div>");
			}
			if($_POST['selection']=="Decrypt"){
				echo("<div class='results'><h1>Input String</h1>");
				echo($_POST['string_enc_dec']);
				echo("</div>");
				echo("<div class='results'><h1>Decrypted String</h1>");
				echo(decrypt($_POST['string_enc_dec']));
				echo("</div>");
			}
		?>
	</div>
	<div style="text-align:center;"><a href="index.php">Encode / Decode Another &raquo;</a></div>
</body>
</html>