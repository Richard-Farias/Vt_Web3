<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title> Exercício 03 de PHP</title>
</head>
<body bgcolor="pink"  text="white">
	<form action="exerc_php03.php" method="post">
		Digite o seu nome: <input type="text" name="nome"><br>
		Digite a sua idade: <input type="text" name="idade"> <br>
		<input type="radio" name="sexo" value="Feminino">
		<label form="fem">Feminino</label>
		<input type="radio" name="sexo" value="Masculino">
		<label form="masc">Masculino</label>
		<input type="submit" name="submit" value="Resposta"><br>

			<?php
				$Nome = $_POST['nome'];
				$Idade = $_POST['idade'];
				$Sexo = $_POST['sexo'];

				if($Sexo =="Feminino" && $Idade<25){
					echo $Nome,  "  ACEITA! ";
				} else 
					{ echo $Nome, " NÃO ACEITA!";}


			?>
		</form>

</body>
</html>