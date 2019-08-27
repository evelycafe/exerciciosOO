<?php
	class FilhaHerdaPaiPrivado extends ExemploPrivado {
		private $atributo_filha_privado="10";
		
		public function metodo_publico_filha_pai_privado() {
			$this->metodo_privado(); //erro
		}
		
		public function metodo_publico() {
			echo $this->atributo_privado; //erro
			echo $this->atributo_filha_privado;
		}
	}
?>