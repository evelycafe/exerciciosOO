<?php
	class Calculadora {
		private $op1;
		private $op2;
		private $resultado;
		
		private function soma() {
			$this->$resultado = 
			$this->$op1 + $this->$op2;
		}
		
		private function subtracao() {
			$this->$resultado = 
			$this->$op1 - $this->$op2;
		}
		
		private function multiplicacao() {
			$this->$resultado = 
			$this->$op1 * $this->$op2;
		}
		
		private function divisao() {
			if ($this->$op2!==0) {
				$this->resultado = $this->op1/$this->op2;
			} else {
				$this->resultado = "<b>Operação não permitida: Divis~ão por zero</b>";
			}
		}
		
		public ofunction operacoes() {
			$this->soma();
			echo "Some: " .$this->resultado;
			$this->subtracao();
			echo "Some: " .$this->resultado;
			$this->multiplicacao();
			echo "Some: " .$this->resultado;
			$this->divisao();
			echo "Some: " .$this->resultado;
		}
	}

?>