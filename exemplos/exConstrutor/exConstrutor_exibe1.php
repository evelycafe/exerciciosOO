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
			include "exConstrutor_classePessoa.php";
			
			$n = $_POST["nome"];
			$e = $_POST["email"];
			$c = $_POST["cpf"];
			$s = $_POST["sexo"];
			$d = $_POST["datanasc"];
			
			$p = new Pessoa($n, $e, $c, $s, $d);
			
			$p->exibe();
		?>
	</body>
</html>