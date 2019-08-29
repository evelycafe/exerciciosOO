<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Exercicio 2</title>
	</head>
	<body>
		<?php include "cabecalho.php" ?>
		
		<form method="post" action="cadastra_produto.php">
			<fieldset>
				Nome: <input type="text" name="nome" /><br/><br/>
				
				Descrição: <input type="text" name="descricao" /><br/><br/>
				
				Tipo: <input type="radio" name="tipo" value="Perecível">Perecível
					<input type="radio" name="tipo" value="Não Perecível">Não Perecível<br/><br/>
				
				Unidade: <input type="text" name="unidade" /><br/><br/>
				
				Preço: <input type="number" name="preco" /><br/><br/><br/>
				
				<input type="submit" value="Enviar" />
			</fieldset>
		</form>
	</body>
</html>