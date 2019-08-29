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
			include "classeProduto.php";
			
			$p = new Produto($_POST);
			
			session_start();
			
			$_SESSION["produto"][] = $p;
			
			echo "Produto cadastrado com sucesso";
			
			$p->exibicao_unitaria();
		?>
	</body>
</html>