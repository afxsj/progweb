<?php
//if simples
if(isset($_GET["submit"])){
    $horario= $_GET["diasemana"];
    // todas as cases tem que ter sua unica variavel podendo mudar so os seus valores e pode ter feiot tudo array sobre array

    switch($horario){
    
        case 1:
        $horario=array(
         array("nome"=>"jornal das 7","hora"=>"7.00","class" => "livre"),
         array("nome"=>"tv globinho", "hora"=>"9.00","class"=>"livre"),
        );
        break;

        case 2:
        $horario=array(
         array("nome"=>"jornal das 7","hora"=>"7.00","class" => "livre"),
         array("nome"=>"tv globinho", "hora"=>"9.00","class"=>"livre"),
        );
        break;
        

            case 3:
            $p1= array("tipo"=>"Avenida Brasil","hora"=>"19 horas","class"=>"17 anos");
            $p2= array("tipo"=>"Jornal das 23","hora"=>"23 horas","class"=>"livre");
            
            break;

            case 4:
            $p1= array("tipo"=>"Plantão Médico","hora"=>"10 horas","class");
            $p2= array("tipo"=>"Tv.globinho","hora"=>"9 horas","class"=>"livre");
            
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
    <title>Document</title>
</head>
<body>
<div id="formulario">
    <form action="html_ex01.php">
        <label for="diasemana">Escolha um dia </label>
        <select name="diasemana">
            <option value="1">Segunda</option>
            <option value="2">Terça</option>
            <option value="3">Quarta</option>
            <option value="3">Quinta</option>
            <option value="3">Sexta</option>
            <option value="3">Sabado</option>
            <option value="3">Domingo</option>
            
            
        </select>
        <input type="submit" name="submit" value="Ver programação">
     </form>
    </div>

    <?php
    if(isset($_GET["submit"])){

  ?>

    <div id="Resultado"</div><h1>Tabela de preços</h1>
    <table border="2">
       

   
    <?php
    $linha=0;
    while($linha<count($horario)){
        echo "Nome:" .$horario[$linha]["nome"]."<br>";
    $linha++;   
 }
 ?>
    
    </div>
    <?php
    }
    ?>
    


        


    </table>
    </div>
    <?php
    ?>
         
    
</body>
</html>