<?php
require "pessoa.php";

class Programador extends Pessoa {
	private $linguagem;

	public function __construct($name, $language){
		$this->nome = $name;
		$this->language = $language;
		echo "<bar>Objeto ".__CLASS__." foi instanciado.<br>";
	}

	// public function setLinguagem($language) {
	// 	$this->linguagem = $language;
	// }

	public function getLinguagem() {
		return $this->linguagem;
	}
}