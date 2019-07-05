<?php
if(isset($_GET["submit"])){
    $pontos=$_GET["pontos"];
    //if com else
    if($pontos< 50){
      $menor="Sem direito a recompensas";
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>]<div id="formulario">
    <form method="post">
            <label for="valor">Valor solicitado</label>
            <input type="text" name="valor" placeholder="Informe o valor "><br>
            <label for="parcelas">Parcelado em</label>

        <select name="parcelas">
            <option value="12">12 parcelas</option>
            <option value="24">24 parcelas</option>
            <option value="36">36 parcelas</option>
        </select><br>
    
</body>
</html>