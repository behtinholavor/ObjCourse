<?php
require "pessoa.php";

$people = new Pessoa;
$people->setNome("Roberto José de Lavôr Rodrigues");
echo $people->getNome();


//var_dump($people);
?>
