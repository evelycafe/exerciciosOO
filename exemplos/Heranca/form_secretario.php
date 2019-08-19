<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Heranca</title>
	</head>
	<body>
		<?php include "cabecalho.php"; ?>
		
		<form method="post" action="cadastra_secretario.php">
		
			<?php include "form_pessoa.php"; ?>

				Salário: <input type="text" name="salario" /><br/><br/>
				
				<input type="submit" value="Cadastrar" />
		</form>
	</body>
</html>