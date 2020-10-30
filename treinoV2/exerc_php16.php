<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Exercício 16 de PHP
	 </title>
</head>

<body bgcolor="hotpink" text="white">
	<form action="exerc_php16.php" method="post">
		<center>
			<br>
			<br>
			<br>
			<br>
			<br>
			O que você acha do site ?<br>
			<br>
			<input type="radio" name="mb" > 
			<label> Muito bom</label>

			<input type="radio" name="bom" >
			<label> Bom</label>

			<input type="radio" name="reg" >
			<label> Regular</label>

			<input type="radio" name="ul" >
			<label> Um lixo </label>
			<br>
			<br>
			<br>
			<hr>

			<br>
			<br>
			<br>
			Qual seção você mais gosta ?
			<br>
			<br>
			<select>
				<option> Em cartaz </option>
				<option> Pré-Venda </option>
				<option> Fora de cartaz </option>
			</select>
			<br>
			<br>
			<hr>
			<br>
			<br>
			Digite seus comentários no campo abaixo :<br>
			<br>
			<textarea name = "comentários" cols = "50" rows="15"> </textarea>
			<br>
			<br>
			<hr>
			Diga-nos como entrar em contato com você :
			<br>
			<br>
			Nome : <input type="text" name="nome"><br>
			<br>
			E-mail : <input type="text" name="email"><br>
			<br>
			Fone : <input type="text" name="tel">
			<br>
			<br>
			<hr>
			<br>
			<input type="checkbox" name="serv"> Quero recerber as novidades do site por e-mail
			<br>
			<br>
			<hr>
			<br>
			<br>
			<input type="submit" name="submit" value="Enviar Dados">
			<input type="submit" name="submit" value="Limpar Formulário">

		</center>


		
	</form>

</body>
</html>