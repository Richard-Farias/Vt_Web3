<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Exercício 20 de PHP
	</title>
</head>
<body bgcolor="yellow" text="green">
	<form action="exerc_php20.php" method="post">
		Escolha sua operação:
		<input type="radio" name="tab" value="somar">
		<label>somar</label>

		<input type="radio" name="tab" value="subtrair">
		<label>subtrair</label>

		<input type="radio" name="tab" value="dividir" >
		<label>dividir</label>

		<input type="radio" name="tab" value="multiplicar" >
		<label>multiplicar</label>
		<hr>
		Digite o 1° números para a operação:
		<input type="text" name="n1">
		
		Digite o 2° números para a operação:
		<input type="text" name="n2">
		<br>
		<input type="submit" name="submit" value="enviar">

	</form>

	<?php
		$n1  = $_POST['n1'];
		$n2  = $_POST['n2'];
		$oper = $_POST['tab'];

		
	switch ($oper) {
		case 'somar':
			echo $n1 + $n2;
			break;

			case 'subtrair':
			echo $n1 - $n2;
			break;

		case 'dividir':
			if ($n2 != 0){
				echo $n1 / $n2;;
			}

			else

			{echo "N2 não pode ser 0 para essa operação.";}

			break;

			case 'multiplicar':

			echo $n1 * $n2;
			break;
		
		
	}
		

		
		

	?>

</body>
</html>