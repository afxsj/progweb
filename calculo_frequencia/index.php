<?php
if(isset($_GET["enviar"])){
$txtnome=$_GET["txt-nome"];
$txtcurso=$_GET["txt-curso"];
$txtcargahoraria=$_GET["txt-carga-horaria"];
$txtcargadia=$_GET["txt-carga-dia"];
$txtfrequencia=$_GET["txt-frequencia"];


$diastotaisdocurso= $txtcargahoraria/ $txtcargadia ;
$qtddefaltasemdia= $diastotaisdocurso* ($txtfrequencia/100);

$frase= "Olá ".$txtnome .", bem vinds ao curso ".$txtcurso.", a carga horária total deste curso";
$frase.=" é de ".$txtcargahoraria." horas. A carga horária por dia é de ".$txtcargadia." horas, o que ";
$frase.= " equivale a ".$diastotaisdocurso." dias de curso no total. A frequência obrigatória";
$frase.=" é de ".$txtfrequencia. " %, ou seja ,você poderá faltar no total de ".$qtddefaltasemdia." dias.";


}else{

    //Frase no caso do formulário nao ter sido prenechido
    $frase="Informe os dados no formulário acima";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculos Escolares </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Header -->
    <?php
    include('views/header.php');
    ?>

    <section>
        <div class="container">
            <h1>Cálculo de Frequência</h1>
            <form action="#" id="formulario" method="GET">

                <label for="">Nome Completo</label>
                <input type="text" id="txt-nome" name="txt-nome" size="70">

                <label for="">Curso</label>
                <input type="text" id="txt-curso" name="txt-curso"-size="10">

                <label for="">Carga horaria do curso</label>
                <input type="text" id="txt-carga horaria " name="txt-carga-horaria"-size="10">

                
                <label for="">Carga Horária Diária</label>
                <input type="text" id="txt-carga-dia" name="txt-carga-dia"-size="10">

                
                <label for="">Frequência Obrigatória(%)</label>
                <input type="text" id="txt-frequencia" name="txt-frequencia"-size="10" placeholder="Digite o valor ">
                <br>
                <input type="submit"  name ="enviar" value="Calcular">

               <br><br>
                <span class="resultado">
                <?php echo $frase;?>
              
                </span>
               


            </form>

            
            
        </div>
    </section>

    <!-- Footer -->
    <?php
    include('views/footer.php')
    ?>

</body>

</html>