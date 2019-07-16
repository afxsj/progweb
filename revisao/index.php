<?php
if(isset($_GET["enviar"])){
    $resultado = strrev($_GET ["nomecompleto"]);
    $tamanho=strren($palavra);
    $resultado="";
    for($x=0;$x<$tamanho;$x++){
        $resultado .="<br>". substr($palavra,0,$x+1);



    }
    
    
    }else{
       $resultado ="Nenhum resultado disponivel";//
 
}   

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>Revisão-Web</title>
</head>
<body>
    <main>
        <header>Topo</header>
        <section>
            <div>
                <p>
                   Utilize o formulário abaixo para gerar resultado:
                </p>
                <form action="index.php" method="get">
                    <label for="nomecompleto"></label>
                    <input type="text" name="nomecompleto" placeholder="informe o nome">

                    <input type="submit" name="enviar" value="Gerar">
                </form>
                <div id="resultado">
                    <?php 
                    echo $resultado;
                    ?> 
                 </div>
             </div>
        </section>
        <footer>Rodapé</footer>
    </main>
    </body>
</html>