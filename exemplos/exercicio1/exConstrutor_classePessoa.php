<?php
	class Pessoa {
		public $nome;
		public $email;
		public $cpf;
		public $sexo;
		public $datanasc;
		
		function __construct ($n, $e, $c, $s, $d) {
			$this->nome = $n;
			$this->email = $e;
			$this->cpf = $c;
			$this->sexo = $s;
			$this->datanasc = $d;
		}
		
		function exibe() {
			echo "<fieldset>
					<div>
						<label>Nome:<label> ".$this->nome."
					</div>
					<div>
						<label>Email:<label> ".$this->email."
					</div>
					<div>
						<label>Cpf:<label> ".$this->cpf."
					</div>
					<div>
						<label>Sexo:<label> ".$this->sexo."
					</div>
					<div>
						<label>Data Nasc:<label> ".$this->datanasc."
					</div>
				</fieldset>";	
		}
		
		function exibe_tr() {
			echo "<tr>
					<td>".$this->nome."</td>
					<td>".$this->email."</td>
					<td>".$this->cpf."</td>
					<td>".$this->sexo."</td>
					<td>".$this->datanasc."</td>
				</tr>";
		}
	}
?>