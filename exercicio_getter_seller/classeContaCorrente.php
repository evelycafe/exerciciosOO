<?php
	class ContaCorrente {
		private $cpf;
		private $nome;
		public  $email;
		private $nroConta;
		protected $saldo;
		
		function __construct($vetor) {
			$this->cpf = $vetor["cpf"];
			$this->nome = $vetor["nome"];
			$this->email = $vetor["email"];
			$this->nroConta = $vetor["nroConta"];
			$this->saldo=0;
		}
		
		public function depositar($valor) {
			$this->saldo += $valor;
			return "Conta: ".$this->nroConta."<br/>Saldo: ".$this->saldo;
		}
		
		public function sacar($valor) {
			if ($this->saldo >= $valor) {
				$this->saldo -= $valor;
				return "Conta: ".$this->nroConta."<br/>Saldo: "$this->saldo;
			} else {
				return "Saldo Insulficiente";
			}
		}
		
		public function exibe() {
			echo "
				<fieldset>
					<div>
						<label>CPF:</label> ".$this->cpf."
					</div>
					
					<div>
						<label>Nome:</label> ".$this->nome."
					</div>
					
					<div>
						<label>Email:</label> ".$this->email."
					</div>
					
					<div>
						<label>NroConta:</label> ".$this->nroConta."
					</div>
					
					<div>
						<label>Saldo:</label> ".$this->saldo."
					</div>
				</fieldset>
			";
		}
		
		public function exibe_saldo() {
			echo 
				"<tr>
					<td>".$this->cpf."</td>
					<td>".$this->nome."</td>
					<td>".$this->email."</td>
					<td>".$this->href=\"operar_conta.php?conta=$this->nroConta\" >"$this->nroConta. "</a></td>
					<td>".$this->saldo."</td>
				</tr>";
		}
	}

?>