<!DOCTYPE html>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Exercício 11  de PHP
 	</title>
 </head>
 <body bgcolor="silver" text="black">

 	<form action="exerc_php11.php" method="post">
 		Digite um número: <input type="text" name=" num"><br>
 		<input type="submit" name="submit" value="Tabuada">
 		
 	</form>
 	<?php 

 		$num = $_POST['num'];
 		$tabuada = 0;
 		for ($i=0; $i <=10 ; $i++) { 
 			$tabuada = $num * $i;
 			echo $num,"X",$i ,"=",$tabuada,"<br>";
 		}
 	 ?>
 
 </body>
 </html>