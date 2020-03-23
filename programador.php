<?php
require "pessoa.php";

class Programador extends Pessoa {
	private $linguagem;

	public function __construct($name, $language){
		$this->nome = $name;
		$this->language = $language;
		echo "<bar>Objeto ".__CLASS__." foi instanciado.<br>"
	}

	// public function setLinguagem($language) {
	// 	$this->linguagem = $language;
	// }

	public function getLinguagem() {
		return $this->linguagem;
	}
}

// __LINE__
// Retorna o número da linha do script na qual ela foi declarada.
// __FILE__
// Retorna o caminho do arquivo PHP.
// __DIR__
// Retorna o diretório.
// __FUNCTION__
// Retorna a function a qual foi declarada.
// __CLASS__
// Retorna a class a qual foi declarada.
// __METHOD__
// Retorna a classe e o método a qual foi declarada.
// __NAMESPACE__
// Retona o namespace a qual foi declarada.
