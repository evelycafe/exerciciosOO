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
			include "classePessoa.php";
			
			$p = new Pessoa($_POST);
			
			session_start();
			
			$_SESSION["pessoa"][] = $p;
			
			echo "Pessoa cadastrada com sucesso";
			
			$p->exibicao_unitaria();
		?>
	</body>
</html>