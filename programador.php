<?php

class Programador extends Pessoa {
	private $linguagem;

	public function setLinguagem($language) {
		$this->linguagem = $language;
	}

	public function getLinguagem() {
		return $this->linguagem;
	}
}