<?php

// Criando variáveis para conexão
$host = 'localhost';
$user = 'root';
$pass = '';
$banco = 'Cliente';

// Comando para conexão no banco de dados
$conecta = mysqli_connect($host,$user,$pass,$banco);

// Comando para identificar qual banco de dados será conectado
$dados = mysqli_select_db($conecta,'Cliente');

// comando para confirmação de conexão
if(mysqli_errno($conecta))
	{echo"Erro conexão";
	}else
	 {
		echo "conectado";
	 }

?>