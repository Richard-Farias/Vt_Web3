
<html>
	<head>
		<title> Validar e Sanitizer </title>
		<meta charset="utf-8">
	</head>
		<body>
			<fieldset>

			<form action="<?php echo $_SERVER ['PHP_SELF']?>" method ="POST" enctype ="multipart/form-data">
				<br>
				<br>
				<h3>Cadastro Pessoais</h3>
				<b>IDADE:<input type="text" name="idade" size="5">
				<b>E-MAIL:<input type="text" name="email">
				<b>URL:<input type="text" name="url">
				<b>IP:<input type="text" name="ip"><br><br>
				<button type = "submit"name= "enviar">Enviar</button><br><br>
				<input type="file" name="arquivo">
				<input type="submit" name="carregar" value= "Enviar"><br>
				
			</form>
		</fieldset>	

		</body>
</html>


<?php

	
	if(isset($_POST["enviar"])):

		$erros = array();

		$idade = filter_input(INPUT_POST, 'idade',FILTER_SANITIZE_NUMBER_INT);

		if(!filter_var($idade,FILTER_VALIDATE_INT)):
			$erros[]= "Idade Inválida!";
		endif;

	

			if(!empty($erros)):

				foreach ($erros as $error):

				echo $error;

				endforeach;
			else:
				echo "Enviado com Sucesso!";
			
			endif;

	endif;


	if(isset($_POST['carregar'])):

		$formatos = array("jpeg","png","jpg","pdf");

		$extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

		if(in_array($extensao, $formatos)):
			$pastaDiretoria = "arquivos/";
			$arqProvisorio = $_FILES['arquivo']['tmp_name'];
			$novoArquivo = uniqid().".$extensao";

		


			if(move_uploaded_file($arqProvisorio,$pastaDiretoria.$novoArquivo)):

				echo "Carregado com Sucesso!";

			else:

				echo "Arquivo não pode ser carregado.";

			endif;

		else:

			echo "Arquivo não existe.";

		endif;


	endif;



?>