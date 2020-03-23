<?php
require "programador.php";

$dev = new Programador("Roberto Lavôr", "PHP");
echo $dev->getNome();
echo "<br>";
echo $dev->getLinguagem();
echo "<br>";

?>
