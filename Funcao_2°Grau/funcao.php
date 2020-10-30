
<!DOCTYPE html>
<html>
<head>
	<title>FQfunção</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="funcao.css">
</head>
<body>
<div>
		<header>
			<center>
				<img id="logo" src="logo01.jpg" style="height: 95px;">
				<p>Equação Polinominal de 2° Grau </p>
			<!--<p id="fq">ƒ (x)função</p>-->
			</center>
		</header>
	</div>

	<?php
	
		$det_a = $_POST["det_a"];
		$det_b = $_POST["det_b"];
		$termoIndep =$_POST["ind"];
		$delta =($det_b*$det_b)-4*$det_a*$termoIndep;	
	?>
		
	<center>
		<div id="introfinal">

				<h3 id="subtitulofinal">Função:</h3>
				<h1 id="fx"><?php echo "ƒ(x)=".$det_a."² + ".$det_b." + ".$termoIndep; ?></h1><br>

			

				
				<fieldset id="fieldDelta">

					<legend id="deltaform">Fórmula Delta</legend>
					<img id="imgDelta" src="formula-delta.jpg">
					<br>

				
						<?php echo "Delta = ".$delta?><br><br>
						<?php 
							if($delta>=0){
									echo "Raiz² Delta = ".sqrt($delta)."br";
							}
							else{
									echo "Não é possível calcular raiz negativa";
							}
 						?>

				</fieldset>
			
				<br>
				<br>

				<fieldset id="fieldRaiz">
	 				<legend>Raizes da função</legend>
	 				<img id="imgBhaskara" src="bhaskara.jpg"><br><br>

						 <?php

 							if($delta>=0){
								$x1 = (-$det_b + sqrt($delta))/(2*$det_a);
								echo "Raiz 1 =".$x1."<br>";
								$x2 = (-$det_b - sqrt($delta))/(2*$det_a);
								echo "Raiz 2 =".$x2."<br>";
							}
							else{
								echo "Não é possível calcular as raizes da função.<br> Raiz de Delta é negativo.";
							}

 						?>
 				</fieldset>
 					<br>
					<br>


 				<fieldset id="fieldVertice">
	 				<legend>Vértices da função</legend>
	 				<img id="imgVertice" src="formulaVertc.jpg"><br><br>

						<?php 

							$xv1 = -$det_b/(2*$det_a);
							echo "Vértice X = ".$xv1."<br><br>";

							$xv2 = -$delta/(4*$det_a);
							echo "Vértice Y = ".$xv2."<br>";

 						?>
			</fieldset>



	
		</div>
	</center>
</body>
</html>




