<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>
		Exercício 15  de PHP
	</title>
</head>
<body bgcolor="orange" text="black">
	<form action="exerc_php15.php"  method="post">
		Tempo de utilização do aparelho em dia : <input type="text" name="tempo">
		 <input type="submit" name="submit" value="tempo útil">

		
	</form>
	<?php
		$tempo = $_POST['tempo'];
		$tempo_vida =  1825 - $tempo;

		echo "Tempo de vida útil do seu aparelho é :", $tempo_vida,"\n dias";



	?>



</body>
</html>