

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">

	<title>Teste Front-End Kukac</title>

	<link href="https://fonts.googleapis.com/css2?family=Pragati+Narrow&family=Saira+Condensed:wght@100;400&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;700&family=Baloo+Tamma+2:wght@400;600&family=Chathura:wght@800&family=Pragati+Narrow&family=Saira+Condensed:wght@100;400&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


	<script
 	 src="https://code.jquery.com/jquery-3.5.1.min.js"
  	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  	crossorigin="anonymous">
  	</script>

	<script
	 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>

	<script
	 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
	</script>

	<script src="https://kit.fontawesome.com/86a8f0fdca.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="indexOutput.css">
<?php
	$inputNome = $_POST["inputNome"];
	$inputRenda = $_POST["inputRenda"];
	$inputDependente = $_POST["inputDependente"];
	$inputCep = $_POST["inputCep"];
?>

</head>


<body>
	<main>
	<div id="page">
		
		<header>
			<div class="container" id="nav-container">
				<nav class="navbar navbar-expand-lg fixed-top">
					<a href="#" class="navbar-brand">
						<span id="titulo">Kukac</span>
						<span id="sub">A solução cognitiv@</span> 
					</a>
				</nav>
				<nav id="subtitulo">Teste Kukac Desenvolvimento Front-End</nav>
			</div>
	
		</div>	
		<div id="divPrincipal">
			<span id="tituloFormulario">Dados Pessoais</span>
			<div id="divFormulario">

				<label id="labName">Nome: <span><?php echo $inputNome; ?></span></label>
				
				<label id="labCep">
					<?php
						function get_endereco($Cep){
							$inputCep=preg_replace("/[^0-9]/", "",$Cep);
							$url = "https://viacep.com.br/ws/$Cep/xml/";
						$xml = simplexml_load_file($url);
							return $xml;
						}

						$endereco =(get_endereco("$inputCep"));
					?>
					Endereço: <span><?php echo"$endereco->logradouro";?></span>

				</label>

				<label id="labCep2">Cep: <span><?php echo"$endereco->cep";?></span></label>

				<label id="labBairro"> Bairro:<span><?php echo"$endereco->bairro";?></span></label>

				<label id="labCidade"> Cidade: <span><?php echo"$endereco->localidade";?></span></label>

				<label id="labEstado"> Estado: <span><?php echo"$endereco->uf";?></span></label>

				<label id="labRendaCapita">
					<?php
						$rendaPerCapita = $inputRenda / $inputDependente;
					?>
					Renda per Capita: <span><?php echo $rendaPerCapita; ?></span>
				</label>
				
			
	</div>
 
</main>
</body>	
</html>