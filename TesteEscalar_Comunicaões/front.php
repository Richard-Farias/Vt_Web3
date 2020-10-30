<?php
	 
	 include ("conexaoEscalar.php");

	$quantidade = $_POST['quant'];
	$tipoTv =$_POST['tvs'];
	$valor =$_POST['valor'];

	$enter = "INSERT INTO  cw_Escalar(quant,produt,valorUnitario,valorTotal) VALUES('".$quantidade."','".$tipoTv."','".$valor."')";
	$newEnter = mysqli_query($conectar,$enter);

?>