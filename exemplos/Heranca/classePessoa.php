<?php
	class Pessoa {
		public $nome;
		public $email;
		public $cpf;
		public $idade;
		public $sexo;
	}
	
	public function __construct($vetor) {
		$this->nome = $vetor['nome'];
		$this->email = $vetor['email'];
		$this->telefone = $vetor['telefone'];
		$this->idade = $vetor['idade'];
		$this->sexo = $vetor['sexo'];
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
?>