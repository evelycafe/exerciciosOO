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
		include("classePerecivel.php");
		include("cabecalho.php");
		
		$p = new Perecivel($_POST);
	
		session_start();
		
		$_SESSION["perecivel"][]=$p;
		
		echo "Produto Perecível cadastrado com sucesso!";
		$p->exibe();

	?>
	</body>
</html>