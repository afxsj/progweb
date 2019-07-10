<?php 
if(isset($_POST["submit"])){
    $pontos= $_POST["pontos"];
    $recompensa= "";

    if($pontos>=50 and $pontos<= 100){
        $recompensa="descontos em produtos ";

    }elseif ($pontos>=101 and $pontos <=400) {
        $recompensa="Milhas em dobro";
   
    }elseif ($pontos>=401 and $pontos <=700) {
        $recompensa="Pontos em dobro para compras em dólar";
   
    
    }else 
        $recompensa="5 vezes mais pontos nas compras em dolar";
   
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex 03</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("[type=range]").change(function(){
            var novovalor=$(this).val();
            $("#intervalo").text(novovalor);
        });
    });
    </script>

    <div id="formulario"</div>
        <form action="html_ex03.php" method="POST">
       
      <label for="pontos">informe seus pontos: </label>
      <input type="range" value="<?php echo (isset($_POST ["submit"])? $pontos:"50")?>" min="50" max="1000" name="pontos">
      <span id="intervalo"><?php echo (isset($_POST["submit"])? $pontos:"50")?></span>
      <input type="submit" name="submit"  value="Simular"> 
  
    </form>
    </div>

    <?php
    ?>


</div>
<?php
    if(isset($_POST["submit"])){
        ?>
        <h1>Seus pontos são</h1>
        <?php
        echo $pontos;
        ?>
      
   
    
    <div id="resultado">
    <h1>Sua recompensa é....</h1>
    <?php
    echo $recompensa;
    ?>


   
  
    <?php
    }
    ?>



</head>
<body>
    
</body>
</html>