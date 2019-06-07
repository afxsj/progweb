<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <main>
        <header>Cabeçalho</header>
        <nav>Menu</nav>
        <section id="formulario">
            <div class="row">
            <div class="bloco12">
                    <h1> Formularios de contatos</h1>
                    <p> Preencha o Formulário a baixo</p>
                    <form id="contato" action="recebe.php" method="GET">
                        <label for="nome">Nome</label>
                        <input type="texto" name="nome" id="nome">

                        <label for="sobrenome">Sobrenome</label>
                        <input type="texto" name="sobrenome" id="sobrenome">

                        <label for="nascimento">Nascimento</label>
                        <input type="date" name="nascimento" id="nascimento">

                        <label for="email"> E mail</label>
                        <input type="email" name="email" id="email">




                        <input type="submit" id="submit" name="submit" value="salvar"/>
                        
                    </form>
                </div>
            </div>

        </section>
    </main>


</body>

</html>