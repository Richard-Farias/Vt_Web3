<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Exercício 14  de PHP
	</title>
</head>
<body bgcolor="black" text="white">
	<form action="exerc_php14.php" method="post">
		Digite o valor da massa : <input type="text" name=" massa">
		<input type="submit" name="submit" value="Resultado">

	</form>
		<?php
		$massa =  $_POST['massa'];
		$segundos = 0;
		$massa_fim = 0;
			while ($massa>=0.10) {
				$massa=$massa/0.25;
				$segundos = $segundos + 30;
			
			}

			$hrs = $segundos/3600;
			$min = ($segundos%3600)/60;
			$seg = ($segundos%3600)%60;


			echo "Tempo :",$hrs,"\n",$min,"\n",$seg;




		?>

</body>
</html>