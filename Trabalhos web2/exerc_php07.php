<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Exercício 07 de PHP
	</title>
</head>
<body bgcolor="darkgreen" text="white">
	<form action="exerc_php07.php" method="post">
		livro para empréstimo : <input type="text" name="livro">
		<input type="radio" name="submit" value="Professor">
			<label form="prof"> Professor </label>
		<input type="radio" name="submit" value="Aluno">
			<label form="aln"> Aluno </label>
		<input type="submit" name="sub" value="Recibo">
			
	</form>
		<?php
		$livro = $_POST['livro'];
		$tipo = $_POST['submit'];

		//$devolucao = date('d-m-y', strtotime('+10 day'))."<br>";

		if($tipo=="Professor"){
			echo "Livro:",$livro,"<br>";
			echo " Prazo de empréstimo 10 dias.<br>";
			echo"Data devolção",date('d-m-y', strtotime('+10 day'))."<br>";
		} 
			else{
			echo "Livro:",$livro,"<br>";
			echo " Prazo de empréstimo 3 dias.<br>";
			echo"Data devolção:",date('d-m-y', strtotime('+3 day'))."<br>";
			}
		?>

</body >
</html>
