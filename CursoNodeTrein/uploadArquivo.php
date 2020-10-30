
<html>
	<head>
		<title> Unpload </title>
		<meta charset="utf-8">
	</head> 

		<body>
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method= "POST" enctype ="multipart/form-data">
				<input type="file" name="arquivo"><br><br>
				<input type="submit" name="upload" value="Enviar">
				
			</form>


		</body>


</html>


<?php

if(isset($_POST['upload'])):
	//array para receber os formatos do arquivo
	$fileFormat = array("jpeg","jpg","png");

	$extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

	if (in_array($extensao,$fileFormat)):
		$pasta ="arquivos/";
		$temporario = $_FILES['arquivo']['tmp_name'];
		$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)):

			echo "Upload Sucessful!";
		else:
			echo "upload not Sucessful!";

		endif;

	else:
		echo  "File is not exist!";	

	endif;		
endif;

?>