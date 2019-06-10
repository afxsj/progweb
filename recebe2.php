<?php
date_default_timezone_set('America/São Paulo');
$nome=$_POST["nome"];
$usuario=$_POST["usuario"];
$senha=$_POST["senha"];
$cargo=$_POST["cargo"];
$admistrador=$_POST["administrador"];

echo"Nome".$nome."<br>";
echo"Usuario".$usuario."<br>";
echo"Senha".$senha."<br>";
echo"Cargo".$cargo."<br>";
echo"Admin".$admistrador."<br>";
echo"Hora:" . date('H');
?>



