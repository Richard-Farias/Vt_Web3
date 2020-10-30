<?php

	include("conect.php");

	$user = $_POST['user'];
	$age = $_POST['age'];
	$cpf = $_POST['cpf'];
	$natural = $_POST['naturalidade'];
	$nacional = $_POST['nacionalidade'];


	$inputDba = " INSERT tb_ususario(nameUser,idade,cpf,naturalidade,nacional) VALUES ('".$user."', '".$age."','".$cpf."','".$natural."','".$nacional."')";

	$input = mysqli_query($inputConect,$inputDba);
?>