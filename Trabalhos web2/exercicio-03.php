<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 03</title>
</head>
<body bgcolor="pink" text="red">
	<center>
		<h1>Exercício 03 trabalhando com data</h1>
		<h2> Utilizando funções de data </h2>
		<h3> Aluno 1 - Aluno 2</h3>
		<font face ="arial" size = "4" color ="darkblue">
			<?php

			echo"Data e Hora atual";
			echo"<hr>";
			echo date ("FjSY,h:iA");
			echo "<hr>";
			$mes = 02;
			$dia = 16;
			$ano = 1970;
			$resp = checkdate($mes, $dia, $ano);
			if($resp == 1)
			{
				echo"A data $dia/$mes/$ano é válida";
			}
				else{
					echo"A data $dia/$mes/$ano é inválida";
				}
				echo"<hr>";
				$hora = 06;
				$min = 35;
				$seg = 55;
				$dt = mktime($hora,$min,$seg,$dia,$mes,$ano);
				echo"Data $dia/$mes/$ano/ às $hora:$min:$seg = $dt";
				echo "<hr> A hora atual é ";
				echo time();
				echo " A hora atual exata é ";
				echo microtime();



			?>


	</center>

</body>
</html>
