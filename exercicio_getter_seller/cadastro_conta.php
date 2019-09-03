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
		include("classeContaCorrente.php");
		
		$c = new ContaCorrente($_POST);
	
		session_start();
		
		$_SESSION["contacorrente"][]=$c;
		
		echo "Cadastrado com sucesso";
		$c->exibe();

	?>
	</body>
</html>