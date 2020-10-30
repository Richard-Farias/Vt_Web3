<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title> Conexão com Banco de Dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	require 'BDphp.php';
	require 'conexao.php';
	$link = DBConecta();
	DBfecha($link);
	?>
</body>
</html>