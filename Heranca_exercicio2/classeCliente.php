<?php

	class Pessoa{		
		public $cpf;
		public $nome;
		public $email;
		public $sexo;
		public $datanasc;
		public $endereco;
		public $cidade;
		public $estado;
		public $pais;

		public function __construct($vetor) {
			$this->cpf = $vetor["cpf"];
			$this->nome = $vetor["nome"];
			$this->email = $vetor["email"];
			$this->sexo = $vetor["sexo"];
			$this->datanasc = $vetor["datanasc"];
			$this->endereco = $vetor["endereco"];
			$this->cidade = $vetor["cidade"];
			$this->estado = $vetor["estado"];
			$this->pais = $vetor["pais"];
		}

		public function exibe_pessoa() {
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
					<label>Sexo:</label> ".$this->sexo."
				</div>
				<div>	
					<label>Data de Nascimento:</label> ".$this->datanasc."
				</div>
				<div>	
					<label>Endereço:</label> ".$this->endereco."
				</div>
				<div>
					<label>Cidade:</label> ".$this->cidade."
				</div>
				<div>
					<label>Estado:</label> ".$this->estado."
				</div>
				<div>
					<label>País:</label> ".$this->pais."
				</div>
			";
		}
		
		function exibe_tr_pessoa() {
			echo "<tr>
					<td>".$this->cpf."</td>
					<td>".$this->nome."</td>
					<td>".$this->email."</td>
					<td>".$this->sexo."</td>
					<td>".$this->datanasc."</td>
					<td>".$this->endereco."</td>
					<td>".$this->cidade."</td>
					<td>".$this->estado."</td>
					<td>".$this->pais."</td>
				";
		}
	}
?>