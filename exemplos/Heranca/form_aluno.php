<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Heranca</title>
	</head>
	<body>
		<?php include "cabecalho.php"; ?>
		
		<form method="post" action="cadastra_aluno.php">
		
			<?php include "form_pessoa.php"; ?>
			
				Matricula: <input type="text" name="matricula" /><br/><br/>
			
				Nota: <input type="number" name="nota" /><br/><br/>
				
				<input type="submit" value="Cadastrar" />
		</form>
	</body>
</html>