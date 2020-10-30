<?php
	// criando conexao com dba
	// Variáveis
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dba = 'Usuario';

	$inputConect = mysqli_connect($host,$user,$pass,$dba);
	$newConect = mysqli_select_db($inputConect,'Usuario');

	if( mysqli_errno($inputConect)){
		echo "Sem conexão";
	}
	else
	{
		//echo "Conectado";
	}
?>