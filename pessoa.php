<?php

class Pessoa {
	private $nome;

	public function __construct(){
		echo "";
	}

	public function setNome($name) {
		$this->nome = $name;
	}

	public function getNome() {
		return $this->nome;
	}
}