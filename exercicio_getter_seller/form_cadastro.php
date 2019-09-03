<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" >
		<title>Cadastro</title>
		<script>
			function liberar_limite(valor) {
				if (valor == conta_especial) {
					document.getElementyById("limite").style.display = "block";
				} else {
					document.getElementyById("limite").style.display = "none";
				}
			}
		</script>
		<style>
			input{margin:5px;}
		</style>
	</head>
	<body>
		<form method="post" action="form_cadastro.php">
			<fieldset>
				<?php
					include ("index.php");
					
					if (empty($_POST)) {
						include ("form.php");
					} else {
						if ($_POST["conta"] == "conta_especial") {
							include ("classeContaEspecial.php");
							$bank = new ContaEspecial($_POST);
						}
						
						session_start();
						$_SESSION["conta_bancaria"][] = $bank;
						
						echo "Cadastrado com sucesso!";
						$bank->exibe();
					}
				?>
			</fieldset>	
		</form>
	</body>
</html>
