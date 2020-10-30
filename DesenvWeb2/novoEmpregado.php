
	
<html>
<head>
	<title> Novo Empregado</title>
	<meta charset="utf-8">
</head>

	<body>


		<form action="novoEmpregado.php" method="post">
			Digite o ID: <input type="text" name="id">

			 <input type="submit" name="submit" value="enviar">	<a href="listarempregados.php"> voltar</a>
		</form>
		<br>

		<form action="acaoNovoEmpregado.php" method="post">
			
			Novo ID: <input type="text" name="novoId">
			
			Novo Nome: <input type="text" name="novoNome">
			
			Novo Endereço: <input type="text" name="novoEnd">
			
			Novo Salário: <input type="text" name="novoSalario">

			<input type="submit" name="submit" value="enviar">

			
		</form>
		
	<?php

		$id = $_POST['id'];
		// comando de conexão com o banco de dados
		 include("conexao.php");
		 // comando para seleção de dados no banco
		$consultaId = mysqli_query($conecta,"SELECT * FROM cw_cadastro where id = $id" );

		// O comando html abaixo cria uma tabela para nomear as colunas e escrever os dados selecionados do comando acima

	?>

		<table border="1">
		<tr>
			<td>Código</td>
			<td> Nome</td>
			<td>Endereço</td>
			<td>Salário</td>
		
		</tr>

	<?php 
		// O laço de repetição é usado para pegar cada linha do banco e armazenar em um array ysando o comando fetch_array
		while ($dados = $consultaId->fetch_array()) { ?>

		<tr>
			<td><?php echo $dados["id"];?></td>
			<td><?php echo $dados["nome"];?></td>
			<td><?php echo $dados["endereco"];?></td>
			<td><?php echo $dados["salario"];?></td>
		
		</tr>
	<?php } ?>
		
	

	</body>
</html>