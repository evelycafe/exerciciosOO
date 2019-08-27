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
		
		include("classeFuncionario.php");
		
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
				<th>Area</th>
				<th>Salário</th>
				<th>Turno</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["funcionario"] as $i=>$f){
					$f->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>