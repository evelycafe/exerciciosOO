<?php
	include("classeExemploPrivado.php");
	
	$o = new ExemploPrivado("**Valor do Atributo Privado**");
	
	//$o->metodo_privado(); //erro
	
	//$o->atributo_privado = "Novo Valor"; //erro
	
	$o->metodo_publico();

?>