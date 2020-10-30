<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Exercício 08 de PHP
	</title>
</head>
<body bgcolor="lightpink" text="deeppink">
	<form action="exerc_php08.php" method="post">
		Digite um número : <input type="text" name="num"><br>
		<input type="submit" name="submit" value="Produto">
	</form>

		<?php
			 $num = $_POST['num'];
			 $produto = 0;
			 echo "Número digitado :", $num ,"<br>";

			 for ($i=1; $i <=$num ; $i++) { 
			 	$produto = $num * $i;
			 	echo $i,"<br>";
			 	echo"produto :",$produto," <br>";
			 	
			 
			 }
			 	
		?>

</body>
</html>