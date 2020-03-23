<?php

class Pessoa {
	public $nome;





	public function falarNome() {
		echo $this->$nome;
	}
}

$people = new Pessoa;
$people->nome = "Roberto";
