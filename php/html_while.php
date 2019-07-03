<?php
//if simples
if(isset($_POST["submit"])){
    $categoria= $_POST["categoria"];
    switch($categoria){
        // sempre a primeira posição é a posição 0
        case 1:
        $produtos=array(
         array("nome"=>"Jaleco Lord","valor"=>"210","ativo" => true),
         array("nome"=>"Jaleco Veneto", "valor"=>240,"ativo"=>false),
        );
        break;

        case 2:
        $produtos=array(
        array("nome"=>"Jaleco Duquesa","valor"=>210,"ativo" => true),
        array("nome"=>"Jaleco Condessa", "valor"=>240,"ativo"=>false),
        array("nome"=>"Jaleco Basic", "valor"=>190,"ativo"=>true),
        );
        break;
        case 3:
        $produtos=array();
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

    <?php
    if(isset($_POST["submit"])){
        ?>

    <div id="resultado">
    <?php
    $linha=0;
    while($linha<count($produtos)){
        echo "Nome:" .$produtos[$linha]["nome"]."<br>";
    $linha++;   
 }
 ?>
    
    </div>
    <?php
    }
    ?>
    
    
</body>
</html>