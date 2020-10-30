<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> Exercício 05 de PHP</title>
</head>
<body bgcolor=" orange" text="white">

	<form action="exerc_php05.php" method="post">
		Digite o 1° lado : <input type="text" name="lado1"><br>
		Digite o 2° lado : <input type="text" name="lado2"><br>
		Digite o 3° lado : <input type="text" name="lado3"><br>	
		<input type="submit" name="submit" value="Triângulo">	
	</form>

	<?php
	$l1 = $_POST['lado1'];
	$l2 =  $_POST['lado2'];
	$l3 = $_POST['lado3'];

		if($l1==$l2 && $l1==$l3 && $l2==$l3) {
			echo "Triângulo equilátero!";
		} 
			elseif ($l1==$l2||$l1==$l3||$l2==$l3 ) {
				echo "Triângulo isósceles";
			}

				else{
					echo "Triângulo escaleno.";
				}

	

	?>

</body>
</html>