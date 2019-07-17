<?php
//Importar classe
require_once 'Carro.class.php';

class CarroEsportivo extends Carro{

    //Atributos
    //Caracteristicas da classe 
   
    private $turbo;
    private $sensordoturbo;

    //Métodos
    //Comportamentos (ações) da classe representada

    public function getTurbo(){
        return $this->turbo;
    }
    public function getsensordoturbo(){
        return $this->sensordoturbo;
    }

    //Setters
    public function setsensordoturbo($sensordoturbo){
        $this->sensordoturbo=$sensordoturbo;
    }

    // Acioanando o turbo 
    public function acionamentodoturbo(){
        if(parent::$this->velocidade>120){
            $this->sensordoturbo=true;
            echo "Turbo ativado...".$this->sensordoturbo."<br>";
        }
    }

}
?>