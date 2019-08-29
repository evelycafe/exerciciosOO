<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Exercicio 2</title>
	</head>
	<body>
		<?php include "cabecalho.php" ?>
		
		<form method="post" action="cadastra_pessoa.php">
			<fieldset>
				Nome: <input type="text" name="nome" /><br/><br/>
				
				Email: <input type="email" name="email" /><br/><br/>
				
				CPF: <input type="text" name="cpf" /><br/><br/>
				
				Sexo: <input type="radio" name="sexo" value="masculino">Masculino
					<input type="radio" name="sexo" value="feminino">Feminino<br/><br/>
					
				Data Nasc: <input type="date" name="datanasc" /><br/><br/><br/>
				
				<input type="submit" value="Enviar" />
			</fieldset>
		</form>
	</body>
</html>