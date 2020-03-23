<?php

class Pessoa {
	//public 
	//private
	//protected	
	private $nome;

	// public function __construct(){
	// 	echo "Criando Pessoa";
	// }

	public function __construct($nomeCriado){
		$this->nome = $nomeCriado;
	}

	public function setNome($novoNome) {
		$this->nome = $novoNome;
	}

	public function getNome() {
		return $this->nome;
	}
}