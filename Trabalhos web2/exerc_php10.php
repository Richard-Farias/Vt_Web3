<!DOCTYPE html>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> 
 		 Exercício 10 de PHP
 	</title>
 </head>
 <body bgcolor="yellow" text="black">
 	<form action="exerc_php10.php" method="post">
 	Digite os números : <input type ="text" name = " num">
 	<input type="submit" name="submit" value="Resultado">
 </form>

  <?php
  		$num = $_POST['num'];
  			for ($i=0; $i < 5; $i++) { 
  				
  				if ($num>=0) {
  					$num  =  $num + $num; 
  					
  				}
  				echo $num;
  			}
  			



  ?>

 </body>
 </html>