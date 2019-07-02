<?php
//if simples
if(isset($_POST["submit"])){
    $servidor= $_POST["servidor"];
    switch($servidor){
        case 1:
        $a1= Array("tipo"=>"a1.medium","hora1"=>"$0.012 por hora","hora6"=>"$0,16 por hora");
        $a2= Array("tipo"=>"a1.large","hora1"=>"$0.025 por hora","hora6"=>"$0,31 por hora");
        $a3= Array("tipo"=>"a1.xlarge","hora1"=>"$0.051 por hora","hora6"=>"$0,65 por hora");
        $a4= Array("tipo"=>"a1.2xlarge","hora1"=>"$0.102 por hora","hora6"=>"$0,140 por hora");
        break;

        case 2:
        $a1= Array("tipo"=>"a1.medium","hora1"=>"$0.014 por hora","hora6"=>"$0,18 por hora");
        $a2= Array("tipo"=>"a1.large","hora1"=>"$0.027 por hora","hora6"=>"$0,38 por hora");
        $a3= Array("tipo"=>"a1.xlarge","hora1"=>"$0.057 por hora","hora6"=>"$0,68 por hora");
        $a4= Array("tipo"=>"a1.2xlarge","hora1"=>"$0.112 por hora","hora6"=>"$0,145 por hora");
        break;

        case 3:
        $a1= Array("tipo"=>"a1.medium","hora1"=>"$0.013 por hora","hora6"=>"$0,19 por hora");
        $a2= Array("tipo"=>"a1.large","hora1"=>"$0.029 por hora","hora6"=>"$0,42 por hora");
        $a3= Array("tipo"=>"a1.xlarge","hora1"=>"$0.055 por hora","hora6"=>"$0,71 por hora");
        $a4= Array("tipo"=>"a1.2xlarge","hora1"=>"$0.108 por hora","hora6"=>"$0,218 por hora");
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
    <form action="html_switch.php" method="post">
            <label for="servidor">Selicione um servidor</label>
        <select name="servidor">
            <option value="1">Leste dos EUA(Norte da Virginia)</option>
            <option value="2">Leste dos EUA(Ohio)</option>
            <option value="3">Oeste dos EUA(Norte da Califórnia)</option>
        </select>
        <input type="submit" name="submit" value="Ver preços">
     </form>
    </div>

    <?php
    if(isset($_POST["submit"])){

  ?>


   
    
    <div id="Resultado"</div>
    <h1>Tabela de preços</h1>
    <table border="1">
        <tr>
            <th>Tipo</th>
            <th>1 Hora</th>
            <th>6 Horas</th> 
        </tr>

        <tr>
            <th><?php echo $a1["tipo"];?> </th>
            <th><?php echo $a1["hora1"];?></th>
            <th><?php echo $a1["hora6"];?></th> 
        </tr>


        <tr>
            <th><?php echo $a2["tipo"];?></th>
            <th><?php echo $a2["hora1"];?></th>
            <th><?php echo $a2["hora6"];?></th> 
        </tr>

        <tr>
            <th><?php echo $a3["tipo"];?></th>
            <th><?php echo $a3["hora1"];?></th>
            <th><?php echo $a3["hora6"];?></th> 
        </tr>
        <tr>
            <th><?php echo $a4["tipo"];?></th>
            <th><?php echo $a4["hora1"];?></th>
            <th><?php echo $a4["hora6"];?></th> 
        </tr>




    </table>
    </div>
    <?php
} 
    ?>
         
  
    
</body>
</html>