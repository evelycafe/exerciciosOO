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
			include ("classeSecretario.php");
			
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
					<th>Salário</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($_SESSION["secretario"] as $i=>$s) {
						$s->exibir_tr();
					}
				?>
			</tbody>
		</table>
	</body>
</html>