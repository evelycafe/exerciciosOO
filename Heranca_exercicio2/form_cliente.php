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
		<form method="post" action="cadastra_cliente.php">
			<fieldset>
				<?php include "form_pessoa.php";?>
				
				<input type="submit" value="Cadastrar Cliente" />
			</fieldset>
		</form>
	</body>
</html>
