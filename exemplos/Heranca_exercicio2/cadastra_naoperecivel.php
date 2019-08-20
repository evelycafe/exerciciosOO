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
		include("classeCliente.php");
		include("cabecalho.php");
		
		$np = new NaoPerecivel($_POST);
	
		session_start();
		
		$_SESSION["naoperecivel"][]=$np;
		
		echo "Produto Não Perecível cadastrado com sucesso!";
		$np->exibe();

	?>
	</body>
</html>