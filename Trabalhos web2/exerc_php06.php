<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title> Exercício 06 de PHP</title>
</head>
<body bgcolor="slateblue" text="black">
	<form action="exerc_php06.php" method="post">
		Digite um número para saber o Mês: <input type="text" name="num"><br>
		<input type="submit" name="submit" value=" Mês">
		
	</form>
	  <?php
	  	$mes = $_POST['num'];

	  		switch ($mes) {
	  			case '1':
	  				echo "Janeiro";
	  				break;
	  			case '2':
	  				echo "Fevereiro";
	  				break;
	  			case '3':
	  				echo "Março";
	  				break;
	  			case '4':
	  			echo "Abril";
	  				break;
	  			case '5':
	  			echo "Maio";
	  				break;
	  			case '6':
	  			echo "Junho";
	  				break;
	  			case '7':
	  			echo "Julho";
	  				break;
	  			case '8':
	  			echo "Agosto";
	  				break;	
	  			case '9':
	  			echo "Stembro";
	  				break;
	  			case '10':
	  			echo "Outubro";
	  				break;
	  			case '11':
	  			echo "Novembro";
	  				break;
	  			case '12':
	  			echo "Dezembro";
	  				break;	
	  				default:
	  				echo "Número digitado não corresponde a um mês";					
	  		}
	  	
	  ?>


</body>
</html>