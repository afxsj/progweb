<?php
require_once ("../../controller/atributo.controller.class.php");
$controller = new tipocontoller;
$registros = $controller->selectWithOrderBy('id_atributo');
?>

<?php
if(mysqli_num_rows ($registros)>0){
    ?>

    <h1>Tabela de Tipos de Ordenação</h1>
    <table border="1">
        <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>grupo</th>
            <th>Ativo</th>
        </tr>
        <?php
         while($reg = mysqli_fetch_array($registros)){
             ?>
            <tr>
                 <td><?php echo $reg['id_atributo'];?></td>
                <td><?php echo $reg['nome'];?></td>
                 <td><?php echo substr($reg['grupo'],0,10);?>...</td>
                 <td><?php echo $reg['ativo'];?></td>
            </tr>

            <?php
         }
         ?>
    </table>
    <?php
}else{
    echo "<h1> Sua Busca não retornou nenhum resultado</h1>";
}
   ?>