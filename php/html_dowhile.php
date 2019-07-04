
<?php
// pelo menos tenho que fazer uma vez o processo e até acabr oq foi proposto
$itens = 0;
$soma = 0;
$qtditens = 0;

$carrinho=array(
    array("produto"=>"Banana","valor"=>7.56,"qtd" => 2),
    array("produto"=>"Contra Filé", "valor"=>12.49,"qtd"=>1),
    array("produto"=>"Maçã", "valor"=>6.78,"qtd"=>1),
    array("produto"=>"Bolacha Bono doce de Leite", "valor"=>2.14,"qtd"=>2),
    array("produto"=>"Arroz-5kg", "valor"=>11.75,"qtd"=>3),
    array("produto"=>"Macarrão", "valor"=>2.65,"qtd"=>4),
    array("produto"=>"Papel Higiênico", "valor"=>11.75,"qtd"=>3),

);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
    
   
    </style>
</head>
<body>
    <div id="resultado">
        <table border 1>
            <tr>
                <th>Produtos</th>
                <th>Valor Unit.</th>
                <th>Qtd</th>
                <th>Sub Total</th>
            </tr>
        <?php
        do{
            $subtotal=($carrinho[$itens]["qtd"]*$carrinho[$itens]["valor"]);
            ($carrinho[$itens]["qtd"]>1?$cor="#f00" : $cor="#000");
            echo "<tr style='color:".$cor="'>";
            echo "<td>" .$carrinho[$itens]["produto"]."</td>";
            echo "<td>" .$carrinho[$itens]["valor"]."</td>";
            echo "<td>" .$carrinho[$itens]["qtd"]."</td>";
            echo "<td>" .($subtotal)."</td>";
        echo "</tr>";
        $soma += $subtotal;
        $qtditens += $carrinho[$itens]["qtd"];
        $itens++;  
        } while($itens<count($carrinho));
        ?>
        <tr>
            <th colspan="3">Total</th>
            <th><?php echo $soma;?></th>
        </tr>
        <tr>
            <th colspan="3">Qtd de itens</th>
            <th><?php echo $qtditens;?></th>
        </tr>

    </div>
    </table>
        
</body>
</html>