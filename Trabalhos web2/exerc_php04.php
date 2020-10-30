<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 04 de PHP</title>
</head>
<body bgcolor="white"  text="black">
	<form action="backEnd.php" method="post">
		Quantidade:   <input type="text" name="num1" placeholder="   0"  size="1">
	
		Valor Unitário: <input type="text" name="num2">

		<select name="tvs" >
			<option value ="Tv 43 Polegadas " >Tv 43 Polegadas</option>
			<option value="Tv 49 Polegadas " >Tv 49 Polegadas</option>
			<option value="Tv 50 Polegadas " >Tv 50 Polegadas</option>
			<option value="Tv 55 Polegadas " >Tv 55 Polegadas</option>
			<option value="Tv 58 Polegadas " >Tv 58 Polegadas</option>
			<option value="Tv 65 Polegadas " >Tv 65 Polegadas</option>
			<option value="Tv 55 Polegadas" >Tv 55 Polegadas</option>
			<option value="monitor LFD(tamanho definido por projeo)" >monitor LFD(tamanho definido por projeo)</option>
			<option value="Monitor vídeo wall" >Monitor vídeo wall</option>	
			
		</select>


		<input type="submit" name="submit" value="Resultado">

	</form>

		<?php

			$n1 = $_POST['num1'];
			$n2 = $_POST['num2'];
			$tv1 = $_POST['tvs'];
			$vetor = 1;
			$result = $n1 * $n2;


			echo $result."<p>";

			echo $tv1;

}


?>

</body>
</html>