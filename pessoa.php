<?php

class Pessoa {
	protected $nome;
	const ESPECIE = "Humano";

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