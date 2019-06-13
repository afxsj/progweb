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
            <form action="" id="formulario" method="GET">
                <label for="">Nome Completo</label>
                <input type="text" id="txt-nome" name="txt-nome" size="70">

                <label for="">Curso</label>
                <input type="text" id="txt-curso" name="txt-curso"-size="60">

                
                <label for="">Carga Horária Diária</label>
                <input type="text" id="txt-carga-dia" name="txt-horaria"-size="10">

                
                <label for="">Frequência Obrigatória(%)</label>
                <input type="text" id="txt-frequencia" name="txt-frequencia"-size="60" placeholder="Digite o valor ">
                <br>
                <input type="submit" value="Calcular">

               <br><br>
                <span class="resultado"></span>
                <span class="resultado"></span>
                <span class="resultado"></span>



            </form>

            <?php
            if(isset($_GET["txt-carga-horaria"]))
            {

            }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <?php
    include('views/footer.php')
    ?>

</body>

</html>