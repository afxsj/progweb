<?php
//if simples 
/* primeiro o html, depois php fazendo teste do if if(isset($_GET["submit"])){
    fazer um swithc seraia a variavel ,depois montar os ecos 
    
    
    
    */
if(isset($_GET["submit"])){
    $diasemana= $_GET["diasemana"];
    // todas as cases tem que ter sua unica variavel podendo mudar so os seus valores e pode ter feiot tudo array sobre array

    switch($diasemana){
    
        case 1:
        $programa=array(
        $dia= "domingo";
         array("nome"=>"jornal das 7","hora"=>"7.00","class" => "livre"),
         array("nome"=>"tv globinho", "hora"=>"9.00","class"=>"livre"),
        );
        break;

        case 2:
        $programa=array(
         array("nome"=>"Encontro","hora"=>"10.00","class" => "livre"),
         array("nome"=>"EPTV", "hora"=>"12.00","class"=>"livre"),
        );
        break;
        

        case 3:
        $programa=array(
         array("nome"=>"Clips","hora"=>"11.00","class" => "livre"),
         array("nome"=>"Jornal Hoje", "hora"=>"12.30.","class"=>"livre"),
        );
        break;
        
        case 4:
        $programa=array(
         array("nome"=>"Telecurso","hora"=>"6.00","class" => "livre"),
         array("nome"=>"Tv globinho", "hora"=>"08.30.","class"=>"livre"),
        );
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

    <div id="Resultado"</div><h1>Tabela</h1>
    <table border="2">
       

   
    <?php
    $linha=0;
    while($linha<count($diasemana)){
        echo "Nome:" .$diasemana[$linha]["nome"]."<br>";
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