<?php
if(isset($_POST["submit"])){
$p1= $_POST["pergunta1"];
$p2= $_POST["pergunta2"];
$d="";

if($p1== 1 and $p2== 1){
    $d="aaa";
}elseif($p1== 1 and $p2== 2){
    $d="bbb";
}elseif($p1== 1 and $p2== 3){
    $d="ccc";
}elseif ($p1== 2 and $p2== 1) {
  $d="ddd";
}elseif($p1== 2 and $p2== 2){
    $d="eee";
}else
    $d="fff";
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
<div i="formulario">
    <form action="html_ex02.php" method="post">
        <label for="pergunta1">Onde está o problema?</label>
        <select name="pergunta1">
            <option value="1">Equipamento</option>
            <option value="2">SO</option>
        </select>
        <label for="pergunta2">Com que frequência este problema ocorre?</label>
        <select name="pergunta2">
            <option value="1">As vezes</option>
            <option value="2">Sempre</option>
            <option value="3">Primeira</option>
        </select>
        <input type="submit" name="submit" value="diagnostico">
    </form>
</div>

<div i="formulario">
    <?php
    if(isset($_POST["submit"])){
        echo $d;
    }
    ?>
</div>
  
</body>
</html>