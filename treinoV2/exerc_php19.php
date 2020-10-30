	<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<title>
			Exercício 19 de PHP
		</title>
	</head>
	<body bgcolor="royalblue" text="white">
		<form action="exerc_php19.php" method="post">
			Digite um valor para ter seu fatorial: <input type="text" name="fat">
			<input type="submit" name="submit" value="enviar">

		</form>

		<?php

			$fator = $_POST['fat'];
			$fat=1 ;
			$i;

		
        for ($i = 1; $i<= $fator; $i++){
              $fat = $fat * $i;
          }
          echo"Fatorial do número digitado é :" ,$fat;
        


				
						
					
		?>
	
	</body>
	</html>