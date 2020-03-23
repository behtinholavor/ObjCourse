<?php
require "pessoa.php";

$people = new Pessoa;
$people->nome = "Roberto";
$people->site = "www.io.com";


$people->falarNome();
echo "\r\n";
echo "<br>";
$people->falarSite();

//var_dump($people);