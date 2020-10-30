<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Exercício 17 de PHP
	</title>
</head>
<body bgcolor="lightpink" text="black">
	<fieldset>
		<legend>
			<h1>Formulário</h1>
			Dados pessoais:<br>
			<br>
			</legend>
		
			<label>
			Nome:
				<input type="text" name="nome" size="30" maxlength="30"><br>
			</label>
			<br>

			<label>
			Endereço:
				<input type="text" name="end" size="30" maxlength="30"><br>
			</label>
			<br>
			<label>
			Cidade:
				<input type="text" name="cid" size="30" maxlength="30"><br>

			</label>
			<br>
			Cidade:<br>

			<select>
				<option>Minas Gerais</option>
					<option>São Paulo</option>
						<option>Rio de Janeiro</option>
							<option>Rio Grande do Sul</option>
								<option>Espírito Santo</option>
									<option>Bahia</option>
			</select>
	</fieldset>
	<br>
	<br>
	<br>
	<fieldset>
		<legend>
			Dados Profissionais
		</legend>
		<br>
		Natureza do Cargo
		<br>
		<label>
			<input type="radio" name="ger">
			Gerência
		</label>

		<label>
			<input type="radio" name="ger">
			Financeiro
		</label>

		<label>
			<input type="radio" name="ger">
			Recepção
		</label>

		<label>
			<input type="radio" name="ger">
			Administrativo
		</label>

		<label>
			<input type="radio" name="ger">
			jurídico
		</label>
		<br>
		<br>

		Área de interesse
		<br>
		<input type="checkbox" name="comp"> Computação
		<input type="checkbox" name="bio"> Biologia
		<input type="checkbox" name="mb"> Meio Ambiente
		<input type="checkbox" name="eng"> Engenharia
		<input type="checkbox" name="hist"> História
		<br>
		<br>
	
		Mini Currículo:<br>
		<textarea name = "comentários" cols = "50" rows="10"> </textarea>
		
	</fieldset>
	<br>
	<br>
	<input type="submit" name="submit" value="Enviar">
	<input type="submit" name="submit" value="Limpar">

</body>
</html>