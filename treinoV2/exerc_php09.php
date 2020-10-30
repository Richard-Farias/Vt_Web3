<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Exercício 09 de PHP
	</title>
</head>
<body bgcolor="maroon" text="white">
	<form action="exerc_php09.php" method="post">
		Digite o número de repetição : <input type="text" name="repete">
		<input type="submit" name="submit" value="Repetir">
		
	</form>
	 <?php

	 $num = $_POST['repete'];

	 	for ($i=0; $i <=$num ; $i++) { 
	 		echo"SOL <br>";
	 	}


	 ?>

</body>
</html>