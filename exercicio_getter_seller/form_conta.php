<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input{margin:5px;}
		</style>
	</head>
	<body>
		<form method="post" action="operar_conta.php">
			<fieldset>
				<input type="text" name="cpf" 
					placeholder="Numero da Conta..." />
		
				<select>
					<option name="tipo" value="s" >Saque</option>
					<option name="tipo" value="d" >Depósito</option>
				</select><br/><br/>
				
				<input type="text" name="valor" 
					placeholder="Valor..." /><br/><br/>
					
				<input type="submit" value="Cadastrar" /> <br/>
			</fieldset>
		</form>
	</body>
</html>
