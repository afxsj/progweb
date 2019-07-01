<?php
if(isset($_GET["submit"])){
    if($_GET["idade"]=="mais"){
        header("Location:https://www.uol.com.br/");
    }else{
        header("Location: https://g1.globo.com/");
    }

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML com IF e Else em PHP</title>
</head>
<body>
    <!-- Restante de estrutura-->
    <div id="formulario">
     <h1>Você tem mais de 18 anos?</h1>
     <form>
        <input type="radio" name="idade" value="mais">Sim
        <input type="radio" name="idade" value="menos">Não <br>
        <input type="submit" name="submit" value="Entrar">
     </form>
    </div>


    <!-- Restante de estrutura-->

    
</body>
</html>