<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Exercicio 1</title>
	</head>
	<body>
		<form method="post" action="exConstrutor_exibe1.php">
			<fieldset>
				<input type="text" name="nome" placeholder="Digite o nome..." /><br/><br/>
				<input type="email" name="email" placeholder="Digite o email..." /><br/><br/>
				<input type="text" name="cpf" placeholder="Digite o cpf..." /><br/><br/>
				Sexo: <input type="radio" name="sexo" value="m">Masc.
					<input type="radio" name="sexo" value="f">Fem.<br/><br/>
				Data Nasc: <input type="date" name="datanasc" /><br/><br/><br/>
				
				<input type="submit" value="Enviar" />
			</fieldset>
		</form>
	</body>
</html>