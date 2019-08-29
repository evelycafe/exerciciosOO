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
		
		include("classeGerente.php");
		
		session_start();
		
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>CPF</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Sexo</th>
				<th>Data Nasc</th>
				<th>Endereco</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>País</th>
				<th>Área</th>
				<th>Salário</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["gerente"] as $i=>$g){
					$g->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>