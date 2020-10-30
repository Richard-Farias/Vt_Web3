<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> Formulário_saudacao</title>
</head>
<body bgcolor="thistle" text="White">
		<center>
		 <p><font face = "cursive" size="14"></p>Formulário de Saudação	 
		 <fieldset><legend>Apresentação do Usuário</legend>
	
	
		<?php

	 		$nome = $_GET["NOME"];
	 		$sexo = $_GET["sexo"];
	 		//$fem = $_GET["sexoF"];

			echo "Seja bem vindo!";
			echo"<br>";
			echo"$sexo $nome";
			

	

		?>
		
		</center>
		<a href="vt_formulario1.html">voltar </a>

</body>
</html>