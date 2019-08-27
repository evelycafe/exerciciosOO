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
		
		include("classeNaoPerecivel.php");
		
		session_start();
		
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Unidade</th>
				<th>Preço</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["naoperecivel"] as $i=>$np){
					$np->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>