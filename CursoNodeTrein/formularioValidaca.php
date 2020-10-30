

<html lang="PT_BR">
<head>
	<title>Filtros de Validação</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Nome :	<input type="text" name="nome" placeholder= "         nome completo   " >
		E_Mail : <input type="text" name="email" placeholder="       seuemail@.com">
		Idade :<input type="text" name="idade" placeholder="                      00">
		Peso : <input type="text" name="Peso" placeholder="                 00,0">
		Ip  :	<input type="text" name="Ip" placeholder="           000.000.0.0">	
		URL :	<input type="text" name="url" placeholder="    http://www.seusite.com">
		<button type="submit" name="enviar-formulario">
			Eviar dados	
		</button>

	</form>


</body>
</html>

<?php 

if (isset($_POST['enviar-formulario'])):
	
	$erros = array();

	//Comandos de sanitizar e validar em um mesmo campo
	$idade = filter_input(INPUT_POST, 'idade',FILTER_SANITIZE_NUMBER_INT);

	if(!filter_var($idade,FILTER_VALIDATE_INT)):
		$erros[]= "Idade Inválida";
	endif;

	//Comandos de validação de dados de formulário

	if(!$email =filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):

		$erros[] = "E_Mail Inválido!";
	endif;
	
	if(!$idade = filter_input(INPUT_POST, 'idade',FILTER_VALIDATE_INT)):
		$erros[] = "Idade Inválida!";

	endif;

	if(!$peso = filter_input(INPUT_POST,'Peso', FILTER_VALIDATE_FLOAT)):
		$erros[] = "Peso Inválido!";
	endif;

	if(!$ip = filter_input(INPUT_POST,'Ip',FILTER_VALIDATE_IP	)):
		$erros[] = "IP Inválido!";
	endif;

	if(!$url = filter_input(INPUT_POST, 'url',FILTER_VALIDATE_URL)):
		$erros[] = "URL Inválido!";
	endif;



// Comandos para confirmação da situação de dados.

	if(!empty($erros)):
		foreach ($erros as $erro):
			echo "<li>$erro</li>";
		endforeach;
	else:
		echo"Dados enviados com sucesso!";

	endif;

endif;


 ?>