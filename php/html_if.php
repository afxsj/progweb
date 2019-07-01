<?php
//if simples
if(isset($_POST["submit"])){
    //atribuição de valores dos formularios nas variaveis
    /*
    $variavel = $_POST["Campo de formulario"]
    */
    $nome =       $_POST["nome"];
    $nascimento = $_POST["datadenascimento"];
    $doador =     $_POST["doador"];
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
    <!-- Restante de estrutura-->
    <div id="formulario">
        <form action="html_if.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="informe seu nome"><br>

            <label for="datadenascimento">Nascimento</label>
            <input type="date" name="datadenascimento" placeholder="informe sua data de Nascimento"><br>

            <label for="doador">Você é um doador?</label>
            <input type="radio" name="doador" value="s">Sim
            <input type="radio" name="doador" value="n">Não <br>

            <input type="submit" name="submit" value="Cadastrar">
            
        </form>

</div>
<?php
        if(isset($_POST["submit"])){
            ?>
        <div id="resultado"
            <h3>Obirgado por preencher o seu cadastro!</h3>
            <h5>Confirme seus dados abaixo:</h5>
            <p>
                 Nome:<?php echo $nome;?><br>
                 Nascimento<?php echo date("d/m/Y",strtotime($nascimento));?> <br>
                 <?php 
                 if($doador=="s"){
                     echo "Você é um doador de orgãos!";
                 }
                 ?>
            </p>
        </div>
            <?php



        }

        ?>


    
</body>
</html>