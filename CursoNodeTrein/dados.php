<?php

$nome = $_POST['username'];
$notaV1 = $_POST['v1'];
$notaV2 = $_POST['v2'];
$notaVT = $_POST['vt'];

/*$nome = "Richard Soares";
$notaV1 = 7;
$notaV2 = 7;
$notaVT = 7;
*/
function media(){
	$notaFinal = ($GLOBALS['notaV1']+$GLOBALS['notaV2']+$GLOBALS['notaVT'])/3;

	if ($notaFinal>=7) :

		echo "Aluno ".$GLOBALS['nome']." está aprovado com média de $notaFinal.";

		else:
		
		echo "Aluno ". $GLOBALS['nome'] ." está reprovado com média de $notaFinal.";

	endif;

}

 media();



?>