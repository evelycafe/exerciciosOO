<?php
	class Pessoa {
		public $nome;
		public $email;
		public $cpf;
		public $sexo;
		public $datanasc;
		
		function __construct ($vetor) {
			$this->nome = $vetor['nome'];
			$this->email = $vetor['email'];
			$this->cpf = $vetor['cpf'];
			$this->sexo = $vetor['sexo'];
			$this->datanasc = $vetor['datanasc'];
		}
		
		function exibicao_unitaria() {
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
		
		function exibicao_tabela() {
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