<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("cabecalho.php");
	?>
		<form method="post" action="cadastra_naoperecivel.php">
			<fieldset>				
				Nome: <input type="text" name="nome" />
			
				Descrição: <input type="text" name="descricao" /><br/><br/>
				
				Unidade: <input type="text" name="unidade" />
				
				Preço: <input type="number" name="preco" /><br/><br/>
				
				<input type="submit" value="Cadastrar Produto" />
			</fieldset>
		</form>
	</body>
</html>
