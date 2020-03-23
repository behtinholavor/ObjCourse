<?php

class Pessoa {
	protected $nome;

	public function __construct($name){
		$this->nome = $name;
	}

	// public function setNome($name) {
	// 	$this->nome = $name;
	// }

	public function getNome() {
		return $this->nome;
	}
}