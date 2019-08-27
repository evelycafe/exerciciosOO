<?php
	if (isset($_GET["op1"]) && isset($_GET["op2"])) {
		include ("classeCalculadora.php");
		
		$c = new Calculadora();
		$c->op1=$_GET["op1"];
		$c->op1=$_GET["op1"];
		$c->operacoes();
	}
	
	else {
		echo "Informe os valores de op1 e op2";
	}
?>