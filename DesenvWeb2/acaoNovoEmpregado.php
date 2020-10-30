<?php

include ("conexao.php");
// Variáveis que recebem os dados do formulário da página  novoEmpregado
$newId = $_POST['novoId'];
$newNome = $_POST['novoNome'];
$newEnd = $_POST['novoEnd'];
$newSal = $_POST['novoSalario'];

// Comando de inserção de dados no banco cw_dados, com as variáveis
$input = "INSERT INTO cw_cadastro (id,nome,endereco,salario) VALUES ('".$newId."','".$newNome."','".$newEnd."','".$newSal."')";

// comando de execução da query acima
$inputNew =mysqli_query($conecta,$input);

// comando redireciionamento de página caso seja inserido novos dados no banco
if($inputNew){

	header ('Location:listarempregados.php');
}else
     {
    header ('Location:novoEmpregado.php');
     }

	
?>