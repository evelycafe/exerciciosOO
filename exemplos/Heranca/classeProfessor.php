<?php
	include "classePessoa.php";

	class Professor extends Pessoa{		
		public $salario;
		public $disciplina;

		public function __construct($vetor){
			parent::__construct($vetor);
			$this->salario = $vetor["salario"];
			$this->disciplina = $vetor["disciplina"];
		}	
		
		function exibe() {
			
			$this->exibe_pessoa();
			
			echo    "<div>	
						<label>Salário:</label> ".$this->salario."
					</div>						
					<div>	
						<label>Disciplina:</label> ".$this->disciplina."
					</div>						
			  </fieldset>";
		}
		
		function exibe_tr() {
			
			$this->exibe_tr_pessoa();
			
			echo "
					<td>".$this->disciplina."</td>
					<td>".$this->salario."</td>
				</tr>";
		}
	}
	

?>