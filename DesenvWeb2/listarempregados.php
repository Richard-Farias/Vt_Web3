

<?php  
		include("conexao.php");
			$consultar = mysqli_query($conecta,"SELECT * FROM cw_cadastro");

			$linhas = mysqli_num_rows($consultar);
	

			//mysqli_close($conecta);

		 ?>
	
<html>
	<head>
		<title> Desenvolvimento wevb 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<table border="1">
		<tr>
			<td>Código</td>
			<td> Nome</td>
			<td>Endereço</td>
			<td>Salário</td>
			<td>Link</td>
		</tr>
		<?php while ($dados = mysqli_fetch_array($consultar)) { ?>

		<tr>
			<td><?php echo $dados["id"];?></td>
			<td><?php echo $dados["nome"];?></td>
			<td><?php echo $dados["endereco"];?></td>
			<td><?php echo $dados["salario"];?></td>
			<td> <a href="verEmpregado.php?id=<?php echo $dados["id"];?>">Editar</a></td>
		</tr>
		<?php } ?>
	    </table>
	    <br>
	    <center>
	    	<a href="novoEmpregado.php">New</a>
	    </center>
	</body>

</html>