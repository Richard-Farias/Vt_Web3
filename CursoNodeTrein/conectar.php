<?php
	// delcare as variáveis de conexão
	$localHost = "localhost";
	$usuario = "root";
	$senha = "";
	$banco =" bda_cadastro";

	// criando variável de conexão e passando como parâmetro as váriaveis de conexão
	$conexao = mysqli_connect($localHost,$usuario,$senha,$senha);

	// criando variável para conexão e definindo o banco de dados a conectar
	$dba = mysqli_select_db($conexao,'bda_cadastro');


	// teste de conexão

	if (mysqli_errno($conexao)) {
	echo "Não foi possível conectar!";

	}

?>
