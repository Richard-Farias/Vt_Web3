<?php

// Criando variáveis para conexão
$host = 'localhost';
$user = 'root';
$pass = '';
$banco = 'Escalar';


$conecta = mysqli_connect($host,$user,$pass,$banco);

$dados = mysqli_select_db($conecta,'Escalar');

// teste de conexão
if(mysqli_errno($conecta))
	{echo"Erro conexão";
	}else
	 {
	
	 }

?>