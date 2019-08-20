<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("cabecalho.php");
	?>
		<form method="post" action="cadastra_funcionario.php">
			<fieldset>
				<?php include "form_pessoa.php";?>
				
				Área: <input type="text" name="area" />
			
				Salário: <input type="text" name="salario" /><br/><br/>
				
				Turno: <input type="text" name="turno" /><br/><br/>
				
				<input type="submit" value="Cadastrar Funcionario" />
			</fieldset>
		</form>
	</body>
</html>
