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
			include ("cabecalho.php");
			include ("classeProduto.php");
			
			session_start();
		?>
	
		<table border='1'>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Tipo</th>
					<th>Unidade</th>
					<th>Preço</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($_SESSION["produto"] as $i=>$p) {
						$p->exibicao_tabela();
					}
				?>
			</tbody>
		</table>
	</body>
</html>