<?php
//importar a classe
require_once 'Carro.class.php';

class CarroTradicional extends Carro{
    //ATRIBUTOS
    //Características da classe representada
    private $portamalas;
    private $sensordoportamalas;
    private $angulodaportadoportamalas;

    //Métodos
    //Comportamentos (ações) da classe representada 
    function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10){
        parent::__construct($p1,$p2,$p3,$p4,$p5,$p6,$p7);
        echo "Criando o Carro Tradicional a partir do Carro<br>";

        $this->setportamalas($p8);
        $this->setsensordoportamalas($p9);
        $this->setangulodaportadoportamalas($p10);

        echo "Porta Malas:".$this->getportamalas()."<br>";
        echo "Sensor do Porta Malas:".$this->getsensordoportamalas()."<br>";
        echo "Ângulo do Porta Malas".$this->$getangulodaportadoportamalas()."°<br>";

    }
    

    

    // Getters 
    public function getportamalas(){
        return $this->portamalas;

    }

    public function getsensordoportamalas(){
        return $this->sensordoportamalas;
    }

    public function getangulodoportamalas(){
        return $this->angulodaportadoportamalas;
    }

    //Seters 
    public function setportamalas($portamalas){
        $this->portamalas=$portamalas;
    }

    public function setsensordoportamalas($sensordoportamalas){
        $this->sensorportamalas=$sensordoportamalas;
    }

    public function setangulodaportadoportamalas($angulodaportadoportamalas){
        $this->angulodaportadoportamalas=$angulodaportadoportamalas;

    }

    // Abertura do Porta Malas
    public function abrirportamalas(){
        echo "INICIANDO A ABERTURA DO PORTA MALAS<br>";
        if($this->sensordoportamalas==false){
            $this->sensordoportamalas=true;
            $this->angulodaportadoportamalas=80;
            echo "Abrindo o porta malas em".$this->angulodaportadoportamalas."°<br>";
        }else{
            $this->sensordoportamalas=false;
            $this->angulodaportadoportamalas=0;
            echo "Fechando o porta mas em".$this->angulodaportadoportamalas."°<br>";

        }
        echo "FINALIZANDO A ABERTURA DO PORTA MALAS<br>";
        echo "==============================================<br><br>";
    }
}

?>
