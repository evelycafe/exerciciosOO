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
			include ("classePessoa.php");
			
			session_start();
		?>
	
		<table border='1'>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>CPF</th>
					<th>Sexo</th>
					<th>Data Nasc</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($_SESSION["pessoa"] as $i=>$p) {
						$p->exibicao_tabela();
					}
				?>
			</tbody>
		</table>
	</body>
</html>