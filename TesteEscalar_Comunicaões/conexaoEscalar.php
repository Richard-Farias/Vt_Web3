<?php
	$host ="localhost";
	$user ="root";
	$password ="";
	$dba = "Escalar";

	$conectar = mysqli_connect($host,$user,$password,$dba);

	$conectaDba = mysql_select_db($conectar,"Escalar");
	 if(mysqli_errno($conectar))
	 {
	 	echo "Erro de Conexão";
	 }

?>