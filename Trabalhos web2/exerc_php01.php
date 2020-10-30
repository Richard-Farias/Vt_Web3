<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> Exercício 01  de PHP</title>
	<meta charset="utf-8">
</head>
<body bgcolor="silver" text="white">
	<form action="exerc_php01.php" method="post"> 
		Digite o primeito número: <input type="text" name="num1"/><br>
		Digite  o segundo número : <input type="text" name="num2"><br>
		<input type="submit" name="submit" value="Calcular"><br>

		
	</form>
		<?php
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		$soma = $num1 + $num2;

		if($soma>20){
			$soma = $soma + 8;
		} 
		elseif ($soma<=20) {
			$soma = $soma - 5;

		}


		echo $soma;


		?>



</body>
</html>