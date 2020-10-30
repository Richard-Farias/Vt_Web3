<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 02 de PHP </title>
</head>
<body bgcolor="red" text="black">
	<form action="exerc_php02.php" method="post">
		Digite um número:<input type="text" name="num">
		<input type="submit" name="submit" value="Divisível">
	</form>
		 	<?php
		 	$numero = $_POST['num'];
	
		 			if($numero%10==0 && $numero%5==0){
		 				echo"O número é divisível por 10 por 5 e por 2.<br>";
		 			} 
		 			   elseif ($numero%5==0 && $numero%10 !=0) {
		 			   	echo "O número é divisível por 5 <br>";
		 			   }

		 			   	 if ($numero%2==0 && $numero%10 !=0 && $numero%5 !=0){

		 			   	 	echo "O número digitado é divisível por 2 <br>";
		 			   	 }

		 			   	 	elseif ($numero%10 !=0 && $numero%5 !=0 && $numero%2 !=0) {

		 			   	 		echo "O número digitado não é divisível por 10,5 e nem por 2.";
		 			   	 		# code...
		 			   	 	}



		 	?>

		
	
</body>
</html>