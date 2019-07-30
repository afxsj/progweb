<?php
session_start();

if (isset($_GET["pontos"])) {
    $pontos = $_GET["pontos"];

    $_SESSION["pontos"] = $_SESSION["pontos"] + $pontos;
    
    echo $_SESSION["pontos"] ;

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acumulador</title>
</head>
<body>
<form action="acumulador.php" method="get">
    <div>
        <label for="nome">Digite:</label>
        <input type="text" name="pontos" placeholder="Digite um Valor" />
        <input type="submit" value="Calcular">
    </div>
</form>
    
</body>
</html>