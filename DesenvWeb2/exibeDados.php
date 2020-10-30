
<?php
	include("conect.php");

	$selecDba = mysqli_query("SELECT * FROM tb_ususario");

	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>exibe dados</title>
	<meta charset="utf-8">
</head>
<body>
	<table border="1">

		<tr>
			<td>Code</td>
			<td>Name User</td>
			<td>Age</td>
			<td>CPF</td>
			<td>Natural</td>
			<td>Nacionality</td>

		</tr>

		<?php  while ( $exitDate = $selectDba ->fetch_array($conect )) {
			# code...
		} ?>
	</table>
</body>
</html>