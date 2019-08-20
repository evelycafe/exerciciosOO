<?php

	class Perecivel {		
		public $nome;
		public $descricao;
		public $unidade;
		public $preco;
		public $validade;

		public function __construct($vetor){
			$this->nome = $vetor["nome"];
			$this->descricao = $vetor["descricao"];
			$this->unidade = $vetor["unidade"];
			$this->preco = $vetor["preco"];
			$this->validade = $vetor["validade"];
		}	
		
		function exibe() {			
			echo "<fieldset>
					<div>	
						<label>Nome:</label> ".$this->nome."
					</div>						
					<div>	
						<label>Descrição:</label> ".$this->descricao."
					</div>
					<div>	
						<label>Unidade:</label> ".$this->unidade."
					</div>
					<div>	
						<label>Preço:</label> ".$this->preco."
					</div>
					<div>	
						<label>Data de Validade:</label> ".$this->validade."
					</div>						
				</fieldset>";
		}
		
		function exibe_tr() {			
			echo "<tr>
					<td>".$this->nome."</td>
					<td>".$this->descricao."</td>
					<td>".$this->unidade."</td>
					<td>".$this->preco."</td>
					<td>".$this->validade."</td>
				</tr>";
		}
	}
	

?>