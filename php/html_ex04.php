<?php
if(isset($_GET["submit"])){
    $v1= $_POST["a"];
    $v2= $_POST["b"];
    $resultado="";

    $soma="";
    $subtracao="";
    $multiplicacao="";
    $divisao="";


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
       <form action="html_ex04.php" method="post">
           <h1>Matematica</h1>
           <h1>Valor de a</h1>
            <label for="valor"></label>
            <input type="text" name="valora" placeholder="Informe o valor "><br>

            <h1>Valor de b</h1>
            <label for="valor"></label>
            <input type="text" name="valorb" placeholder="Informe o valor "><br>
            <input type="submit" name="submit" value="Calcular">
       </form>
    </div>
    
    <div id="resultado">
        <?php
    if(isset($_GET["submit"])){
        

    }
?>
<?php
 echo"$v1+$v2 é $soma";

?>


</div>
</body>
</html>