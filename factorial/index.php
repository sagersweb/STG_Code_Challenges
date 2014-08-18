<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Recursive Factorial</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script>
function ajaxfactorial(inputString) {
  if (inputString.length==0) { 
    document.getElementById("factorialVal").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("factorialVal").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","functions.php?number="+inputString,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<div class="input">
	<h3>Factorial</h3>
	<form>
		<p>
			<label>Number</label>
			<input type="text" name="number" id="number"  onkeyup="ajaxfactorial(this.value)" />
		</p>
	</form>
	<p><span id="factorialVal"></span></p>
</div>
</body>
</html>