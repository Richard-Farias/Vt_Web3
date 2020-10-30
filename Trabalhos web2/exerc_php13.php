<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Exercício 11  de PHP
	</title>
</head>
<body bgcolor="lime" text="white">
	<form action="exerc_php13.php" method="post">
		Altura do Chico : <input type="text" name="alt01">
		Altura de Juca : <input type="text" name="alt02">
		<input type="submit" name="submit" value  = "pesquisar">	

	</form>
		<?php
			$chico = $_POST['alt01'];
			$juca = $_POST['alt02'];
			$ano = 0;


			do {
				$chico =$chico + 2;
				$juca = $juca + 3;
				$ano = $ano + 1;
			} while ($chico>=$juca);
			echo $chico,"\n",$juca,"\n",$ano;
			


		?>

</body>
</html>