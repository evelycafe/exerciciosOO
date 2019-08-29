<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("classefuncionario.php");
		include("cabecalho.php");
		
		$f = new Funcionario($_POST);
	
		session_start();
		
		$_SESSION["funcionario"][]=$f;
		
		echo "Funcionario cadastrado com sucesso!";
		$f->exibe();

	?>
	</body>
</html>