
<!DOCTYPE html>
<html>
<head>
	<title>
			Exercício 18 de PHP
	</title>
</head>
<body bgcolor="orange" text="Black">
	<form action="exerc_php18.php" method="post">
		Digite um número : <input type="text" name="num">
		 <input type="submit" name="submit" value="enviar">
		
	</form>
	<?php
		$num = $_POST['num'];
		if ($num>=0) {
			echo"Número Positivo!";
		}

			else {	echo"Número negativo!"; }
		
		

	?>

</body>
</html>