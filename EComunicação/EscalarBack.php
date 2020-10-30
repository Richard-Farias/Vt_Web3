<?php
	 include ("conect.php");
	
	$quant = $_POST['arrayQuant'];
	$tvs = $_POST['arrayTvs'];
	$valorUnit = $_POST['arrayValor'];
	$valorTotal = $quant * $valorUnit;



$input = "INSERT INTO cw_escalar(quant,produt,valorUnitario,valorTotal) VALUES ('".$quant."','".$tvs."','".$valorUnit."','".$valorTotal."')";


$inputNew = mysqli_query($conecta,$input);


$consultar = mysqli_query($conecta,"SELECT * FROM cw_escalar");

?>
	
<html>

	<head>
		<title> Desenvolvimento wevb 2</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="FrontEnd.css">
	</head>
	
	<body>

		<h1>
	 		<center><br><img src="logo " ></center>
	 		<center> Planilha de orçamento Menu Board Digital</center>
   		 </h1>

		<table border="1" cellpadding="15" cellspacing="5" style="border-color: #215966">

			<tr>
				<th colspan="14" bgcolor="#5DBCD2" style=" color: #ffffff" "font-family: arial" > Tvs </th>	
			</tr>

			<tr bgcolor="#B7DDE8">
				<th aling = "center"style="font-family: arial">
					Quant.	
				</th>

				<th  aling = "center" colspan ="5"style="font-family: arial">
					Tvs
				</th>

				<th aling = "center" colspan ="4"style="font-family: arial">
						Valor Unitário

				<th aling = "center" colspan ="4" style="font-family: arial">
						Valor Total
				</th>

			</tr>

			<?php while ($dados = mysqli_fetch_array($consultar)) { ?>

				<tr bgcolor="#B7DDE8">
					<td aling = "center"style="font-family: arial"><?php echo $dados["quant"];?></td>
					<td aling = "center" colspan ="5"style="font-family: arial"> <?php echo $dados["produt"];?> </td>
					<td aling = "center" colspan ="4"style="font-family: arial"> <?php echo $dados["valorUnitario"];?> </td>
					<td aling = "center" colspan ="4" style="font-family: arial"> <?php echo $dados["valorTotal"];?> </td>
				</tr>

			<?php } ?>

	    </table>

	</body>


</html>
	
	