<!DOCTYPE html>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Exercício 11  de PHP
 	</title>
 </head>
 <body bgcolor="green" text="yellow">
 	<form action="exerc_php12.php" method="post">
 		Digite uma palavra: <input type="text" name="texto">
 		<input type="submit" name="submit" value="imprimir">
 	</form>

 		<?php

 			$texto = $_POST['texto'];
 			echo $texto,"<br>";
 			echo $texto,"\n",$texto,"<br>";
 			echo $texto,"\n",$texto,"\n",$texto,"<br>";
 			echo $texto,"\n",$texto,"\n",$texto,"\n",$texto,"<br>";
 		?>
 
 </body>
 </html>