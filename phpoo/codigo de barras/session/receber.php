<?php
session_start();



 echo "Valor recebido da id = "            .$_SESSION["id"]."<br>";
 echo "Valor recebido do nome = "          .$_SESSION["nome"]."<br>";
 echo "Valor recebido da descricao = "     .$_SESSION["descricao"]."<br>";
 echo "Valor recebido da sku = "           .$_SESSION["sku"]."<br>";
 echo "Valor recebido do ean = "           .$_SESSION["ean"]."<br>";
 echo "Valor recebido do valorunitario = " .$_SESSION["valorunitario"]."<br>";
 echo "Valor recebido da id_categoria = "  .$_SESSION["id_categoria"]."<br>";
?>