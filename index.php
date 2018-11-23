<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div id="container">
	<h2>Mini Calculator</h2>
	<p>A very tiny smooth way fot get a quick result.</p>
	<form action="index.php" method="post">
		<input type="number" name="number1" id="camps">
	<select  name="option" id="select">
		<option value="0">+</option>
		<option value="1">-</option>
		<option value="2">x</option>
		<option value="3">/</option>
	</select>

		<input type="number" name="number2" id="camps">
			<div id="buttons">
		<button type="submit" name="calcule" value="calcular" id="send">Calculate</button> 
	
	<button type="reset" value="calcule" id="reset">Reset </button>
		</div>
			</form>
	</body>
	</div>
</html>
	<?php
	class mathematic{
		public static function sumar($n1,$n2){
			$suma=$n1+$n2;
			return $suma;
		}
			public static function restar($n1,$n2){
			$resta=$n1-$n2;
			return $resta;
		}
				public static function multiplicar($n1,$n2){
			$multi=$n1*$n2;
			return $multi;
		}
			public static function dividir($n1,$n2){
			$divi=$n1/$n2;
			return $divi;
		}
		
	}
if(isset($_REQUEST['calcule'])){
	$n1=$_REQUEST['number1'];
	$n2=$_REQUEST['number2'];
	$op=$_REQUEST['option'];

		switch($op){
			case 0: echo "= ".mathematic::sumar($n1,$n2); break;
			case 1: echo " = ".mathematic::restar($n1,$n2); break;
			case 2: echo "= ".mathematic::multiplicar($n1,$n2); break;
			case 3: echo " =".mathematic::dividir($n1,$n2); break;

		}
		}

		
	?>


