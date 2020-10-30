<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> teste php</title>
</head>
<body bgcolor = "deepskyblue" text= "white">
	<center>
		<p> <h1> Exercício  05 Extra </h1>
			<p><h2>Equipes com ate 3 Alunos</h2> 
				<p> <h3>Aluno1 - Aluno 2 </h3>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<hr>
	<?php
	$qtde = $_GET["QTDE"];
	$nome = $_GET["NOME"];

	if($qtde>3){

	echo "<h1>Aviso ao representante $nome </h1>";
	echo"<br> ";
  	echo " <h1>A Equipe com $qtde alunos foi aceita<h1>";
  	}

  else 
  	echo "<h1> Representante $nome , é preciso ter o mínimo de 3 participantes na equipe </h1>"


	?>
	 <a href="teste.html">Voltar</a>

   </center>
</body>
</html>