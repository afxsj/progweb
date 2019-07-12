<?php
if(isset($_POST["submit"])){
    $valor= $_POST["valor"];

  
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aividade externa</title>
</head>
<body>

  <div id="formulario">
  <form action="index.php" method="POST">

  <h2>A raiz quadrada  de</h2>
  <input type="text" name="valor" value="" placeholder="Valor" />
  
  

  <input type="submit" name="submit" value="Calcular">
 </form>
  
  
  </div>
   <div id="resultado">
   <?php
   if(isset($_POST["submit"])){

   ?>
   
   
    <?php
   echo sqrt($valor); // 3
   //echo sqrt($valor);
   }

   ?>

   <h3>A Raiz é</h3>

 <?php
if($valor % 2 == 0){
    echo "par";
} else {
    echo "impar";
}//fatorial sempre n=ao valor ditado ex 5=ditado e n=ao proximo que é 5 depois 4 e assim por diante 
?>

</div>
 
    
</body>
</html>