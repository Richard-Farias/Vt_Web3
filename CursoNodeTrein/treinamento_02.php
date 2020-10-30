
<html>

<head>
	<title> Treinamento 2</title>
	<meta charset="utf-8">
</head>

	<body>

		<fieldset>

			<form action="<?php echo $_SERVER['PHP_SELF']?>" method = "POST" enctype ="multipart/form-data">
				ID:<input type="text" name="id">
				IDADE:<input type="text" name="idade">
				E-MAIL:<input type="text" name="email">
				<button type="submit" name="envio">Enviar</button><br><br>
				<input type="file" name="arquivo">
				<input type="submit" name="carregar" value="Enviar"><br>
			</form>

		</fieldset>
	</body>
</html>

<?php 
	if(isset($_POST['envio'])):

		$erros = array ();

		$id = filter_input(INPUT_POST,"id",FILTER_SANITIZE_NUMBER_INT);
		if(!filter_var($id,FILTER_VALIDATE_INT)):
			$erros[]="id inválido!";
		endif;

		$idade = filter_input(INPUT_POST, "idade",FILTER_SANITIZE_NUMBER_INT);
		if(!filter_var($idade,FILTER_VALIDATE_INT)):
			$erros[]="Idade Inválida";
		endif;

		$email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);
		if(!filter_var($idade,FILTER_VALIDATE_EMAIL)):
			$erros[]="E_mail Inválido";
		endif;

			if(!empty($erros)):
				foreach ($erros as $erro):
					echo $erro;
				endforeach;
			else:
					echo "Carregado com sucesso!";
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