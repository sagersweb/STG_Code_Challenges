<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fizz Buzz Prime</title>
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<style type="text/css">
body{
	width:50%;
	text-align:center;
	margin:0px auto;
	}
div{
	float:left;
	width:150px;
	padding:2px;
	border:1px solid #333;
	text-align:left;
	}
span{
	display:inline-block;
	width:50px;
	text-align:right;
	font-weight:bold;
	padding-right:10px;
	}
i{
	color:red;
	}	
</style>
</head>
<body>
<h1>FizzBuzz + <i>Prime</i></h1>
<?php
	function primeCheck($x){
		if ($x<=1){
			return false;
		}
		if($x==2){
			return true;
			}
		if($x % 2 ==0){
			return false;
			}		
		  for ($y = 3; $y * $y <= $x; $y += 2) {
		   	if ($x % $y == 0)
			return false;
		  }
		  return true;
		 }
		
	for ($x=1; $x<=150; $x++){
		echo("<div><span>" . $x . "</span>");
			if ($x % 3 == 0 && $x % 5 == 0){
				echo("fizzbuzz ");
			}
			elseif ($x % 3 == 0){
				echo("fizz ");
			}
			elseif ($x % 5 == 0){
				echo("buzz ");
				}
			if(primeCheck($x)){
				echo("prime");
			}
		echo("</div>");
		}
?>
<script>
$( document ).ready(function() {
	$("div:contains('prime')").css("color","rgb(255,0,0)");
	$("div:contains('prime')").css("font-style","italic");
});
</script>
</body>
</html>