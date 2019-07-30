<?php
session_start();
$_SESSION["nome"] = "aula teste";
$_SESSION["valor"] = 10;

echo "Session Nome = " .$_SESSION["nome"]."<br>";
echo "Session Nome =" .$_SESSION["valor"]."<br>";

echo "<br>===========================================<br><br>";

$nome="aula teste";
$valor=10;

echo "Variavel Comum Nome = " .$nome."<br>";
echo "Variavel Comum Valor = " .$valor."<br>";


?>
