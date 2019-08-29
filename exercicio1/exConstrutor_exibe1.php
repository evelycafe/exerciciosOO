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
			include "exConstrutor_classePessoa.php";
			
			/* $n = $_POST["nome"];
			$e = $_POST["email"];
			$c = $_POST["cpf"];
			$s = $_POST["sexo"];
			$d = $_POST["datanasc"]; */
			
			$p = new Pessoa($n, $e, $c, $s, $d);
			
			session_start();
			
			$_SESSION["pessoa"][] = $p;
			
			echo "Pessoa cadastrada com sucesso";
			
			$p->exibe();
		?>
	</body>
</html>