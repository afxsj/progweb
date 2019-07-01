<?php
if(isset($_POST["submit"])){
    $valor=$_POST["valor"];
    $parcelas=$_POST["parcelas"];
    //if com else
    if($parcelas==12){
        $juros=0.10;
    }elseif ($parcelas==24) {
        $juros=0.13;
    }else{
        $juros=0.15;
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML com for</title>
</head>
<body>
    <!-- Restante de estrutura-->
    <div id="formulario">
    <form method="post">
            <label for="valor">Valor solicitado</label>
            <input type="text" name="valor" placeholder="Informe o valor "><br>
            <label for="parcelas">Parcelado em</label>

        <select name="parcelas">
            <option value="12">12 parcelas</option>
            <option value="24">24 parcelas</option>
            <option value="36">36 parcelas</option>
        </select><br>

    <input type="submit" name="submit" value="Calcular">
    </form>
</div>
     <?php 
     if(isset($_POST["submit"])){
         ?>

    <div id="resultado">
        <h1>O resultado do seu financiamento é de :</h1>
        <h3>Valor: <?php echo $valor ;?> a ser pago <?php echo $parcelas?>.</h3>

        <?php
        $jurostotal= $valor*$juros*$parcelas;
        $montante= $jurostotal+$valor;
        $valorparcela= $montante/$parcelas;
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Parcela</th>
                    <th>Valor</th>
                    
                </tr>
                <?php
                for($x=1;$x<($parcelas+1);$x++){
                ?>
                <tr>
                    <td> <?php echo $x;?>Parcela</td>
                    <td><?php echo $valorparcela;?></td>
                    <td></td>
                </tr>
                <?php
                   }
                   ?>
            </thead>
            
        </table>
        <h3>Valor final: <?php echo $montante;?></h3>
         </div>
        <?php
        }
        ?>
  
</body>
</html>