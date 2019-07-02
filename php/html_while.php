<?php
//if simples
if(isset($_POST["submit"])){
    $servidor= $_POST["categoria"];
    switch($categoria){
        case 1:
        $produtos=array(
         Array("nome"=>"Jaleco Lord","valor"=>"210","ativo" => true),
         Array("tipo"=>"Jaleco Veneto", "valor"=>240,"ativo"=>false),
        );
        break;

        case 2:
        $produtos=array(
        Array("nome"=>"Jaleco Duquesa","valor"=>210,"ativo" => true),
        Array("tipo"=>"Jaleco Condessa", "valor"=>240,"ativo"=>false),
        Array("tipo"=>"Jaleco Basic", "valor"=>190,"ativo"=>true),
        );
        break;
        case 3;
        $produtos=null;
        break;
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML com while em PHP</title>
</head>
<body>
    <div id="formulario">
    <form action="html_while.php" method="post">
            <label for="categoria">Selicione uma Categoria</label>
        <select name="categoria">
            <option value="1">Jaleco Masculino</option>
            <option value="2">Jaleco Feminino</option>
            <option value="3">Jaleco infantil</option>
        </select>
        <input type="submit" name="submit" value="Ver preços">
     </form>
    </div>

    <div id="resultado"</div>
    }








    
    
</body>
</html>