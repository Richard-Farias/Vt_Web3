<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Cliente	</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css"/>


</head>
</head>
<body>


	<form name="formCadastro"  action="formulario.php" method="post">
	<fieldset >
		<legend><h3>Dados Pessoais</h3></legend>

		<div class="form-group" > 
		<label> Nome </label>
		<input type="text" name="nome" id="nome" placeholder="Nome "   />
		</div>

		<div >
		<label>Data de Nascimento </label>
		<input type="text" name="dataNascimento" id="datanascimento" placeholder="00/00/0000"/>
		</div>

		<div class="form-group"> 
		<label> Endereço </label>
		<input type="text" name="end" id="end" placeholder="Endereço"/>
		</div>

		<div class="form-group"> 
		<label> E-mail </label>
		<input type="email" name="email" id="email" placeholder="E-mail"/>
		</div>

		<div class="form-group"> 
		<label> Telefone </label>
		<input type="tel" name="tel" id="tel" placeholder="(00)0000-0000"/>
		</div>

		</fieldset>
		
	</form>
	<script type="text/javascript" src="//code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
</body>
</html>