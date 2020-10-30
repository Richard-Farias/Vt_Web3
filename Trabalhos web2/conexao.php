<?php
function DBConecta(){
// comando para abrir conexão com o banco de dados
	$link = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die (mysqli_connect_error());
	msqli_set_charset($lin,DB_CHARSET) or  die (mysqli_connect_error($ink));
	return $link;
}

// comando para fechar a coneção com o banco de dados
	function DBfecha($link){
		mysqli_close($link)or die (mysqli_error());
}
	}

?>