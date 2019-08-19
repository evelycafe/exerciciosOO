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
			include ("classeAluno.php");
			
			session_start();
		?>
	
		<table border='1'>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Telefone</th>
					<th>Idade</th>
					<th>Sexo</th>
					<th>Matricula</th>
					<th>Nota</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($_SESSION["aluno"] as $i=>$a) {
						$a->exibir_tr();
					}
				?>
			</tbody>
		</table>
	</body>
</html>