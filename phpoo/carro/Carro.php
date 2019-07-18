<?php

//Importar a classe
require_once 'Carrotradicional.class.php';

//Instanciando o objeto
// a apartir da classe
$carro=new CarroTradicional("Volkswagen","2018","Gol","Branca",false,0,200,"340 litros",false,0," sedan ",true);

//Criando o nosso carro




$carro->acelerar();
$carro->ligaredesligar();
$carro->acelerar();
$carro->abrirportamalas();


?>