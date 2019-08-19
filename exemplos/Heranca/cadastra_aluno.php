<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div {margin: 5px;}
		</style>
	</head>
	<body>
		<?php
			include "cabecalho.php";
			include "classeAluno.php";
			
			$a = new Aluno($_POST);
			
			session_start();
			
			$_SESSION["aluno"][] = $a;
			
			echo "Aluno cadastrado com sucesso!";
			
			$a->exibe();
		?>
	</body>
</html>