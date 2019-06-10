









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
             <p> Preencha o Formulário a seguir</p>
             <form id="contato" action="recebe php" method="post">
                 
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
                <br>

                 <label for="usuario">Usuário</label>
                 <input type="text" name="usuario" id="usuario" placeholder=" informe o nome ">
                 <br>

                 <label for="senha">Senha</label>
                 <input type="passoword" name="senha" id="senha"placeholder="informe a senha">
                 
                 <br>
                
                 <label for="cargo">Cargo</label>
                 <select id="cargo" name="cargo">
                     <option value="1"> Gerente </option>
                     <option value="2"> Auxiliar administrativo</option>
                     <option value="3"> Secretário</option>
                     <option value="4"> Aprendiz</option>
                 </select>
                 <br>

                 <label for="admistrador"> Admistrador </label>
                 <input type="radio" name="administrador" id="admistrador" value="S">Sim
                 <input type="radio" name="administrador" id="admistrador" value="N">Não
                 <br>
                 <input type="submit" name="submit"value="Cadastrar">
                 <p>
            Olá <strong> <?php echo $nome;?> sua idade é  <?php echo $idade;?> anos!<?php echo $niver;?> seu email esta correto?  <?php echo $email;?> 
            Seja bem vindo!
            </strong>
        </p>
       
                 

                     






                
            
            
            
            
            </form>







     </section>
      

    
</body>
</html>
