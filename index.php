<?php
require "pessoa.php";
require "programador.php";

$pes = new Pessoa;
$pes->setNome("Roberto");
echo $pes->getNome();
echo "<br>";

$dev = new Programador;
$dev->setNome("Betinho");
$dev->setLinguagem("Delphi");
echo $dev->getNome();
echo "<br>";
echo $dev->getLinguagem();
echo "<br>";


//var_dump($pessoa);
?>
