
<html>

	<head>

		<title>Validação e Sanitização</title>
		<meta charset="utf-8">

	</head>

		<body>

			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"> 

			<b>Altura :</b><input type="text" name="altura" size="5">
			<b>Peso :</b><input type="text" name="peso" size="5">
			<b>Idade :</b><input type="text" name="idade" size="5">
			<b>E-mail :</b><input type="text" name="email">
			<b>Ip :</b><input type="text" name="ip">
			<button type="submit" name="enviar"> Enviar</button>
			
			</form>

		</body>
</html>

<?php
	if(isset($_POST['enviar'])):
		$erros = array();

		if(!$altura = filter_input(INPUT_POST, "altura",FILTER_VALIDATE_FLOAT)):
			$erros[]= "Altura Inválida!";
		endif;

		if(!$peso = filter_input(INPUT_POST, "peso",FILTER_VALIDATE_FLOAT)):
			$erros[]= "Peso Inválido!";
		endif;

		if(!$idade = filter_input(INPUT_POST, "idade",FILTER_VALIDATE_INT)):
			$erros[] = "Idade Inválida";
		endif;

//Os campos email e ip vai ter a função de sanitizar e validar

		$email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);

		if(!
			filter_var($email,FILTER_VALIDATE_EMAIL)):
			$erros[] = "E-mail Inválido!";
		endif;

		$ip = filter_input(INPUT_POST,"ip", FILTER_SANITIZE_NUMBER_INT);

			if(filter_var($ip,FILTER_VALIDATE_IP)):
				$erros[] = " Ip Inválido";
			endif;
					

			if(!empty($erros)):
				foreach ($erros as $erro):
					echo "<li>$erro</li>";
			endforeach;

			else:
					echo"Dados enviados com sucesso!";

			endif;


	endif;




?>
