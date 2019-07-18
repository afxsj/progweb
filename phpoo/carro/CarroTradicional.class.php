<?php
//importar a classe
require_once 'Carro.class.php';

class CarroTradicional extends Carro{
    //ATRIBUTOS
    //Características da classe representada
    private $portamalas;
    private $sensordoportamalas;
    private $angulodaportadoportamalas;
    private $travadoportamalas;

    //Métodos
    //Comportamentos (ações) da classe representada 
    function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$a1,$a2){
        parent::__construct();
        echo "Criando o Carro Tradicional a partir do Carro <br>";

        Carro::setMarca($p1);
        Carro::setAnoDeFabricacao($p2);
        Carro::setModelo($p3);
        Carro::setCor($p4);
        Carro::setligado($p5);
        Carro::setVelocidade($p6);
        Carro::setVelocidadeMaxima($p7);
        Carro::settipo($a1);
    
        
         $this->setportamalas($p8);
         $this->setsensordoportamalas($p9);
         $this->setangulodaportadoportamalas($p10);
         $this->settravadoportamalas($a2);
    

        echo "Marca:" .Carro::getmarca()."<br>";
        echo "Fabricação:" .Carro::getanodefabricacao()."<br>";
        echo "Modelo:" .Carro::getModelo()."<br>";
        echo "Cor:" .Carro::getcor()."<br>";
        echo "Ligado:".Carro::getligado()."<br>";
        echo "Velocidade:" .Carro::getvelocidade()."<br>";
        echo "Velocidade Máxima:" .Carro::getvelocidademaxima()."<br>";
        echo "Tipo do veiculo" .Carro::gettipo()."<br>";
        

       

        echo "Porta Malas:".$this->getportamalas()."<br>";
        echo "Sensor do Porta Malas:".$this->getsensordoportamalas()."<br>";
        echo "Ângulo do Porta Malas:".$this->getangulodaportadoportamalas()."°<br>";
       echo "Trava do porta malas:".$this->gettravadoportamalas()."°<br>";

    }
    

    

    // Getters 
    public function getportamalas(){
        return $this->portamalas;

    }

    public function getsensordoportamalas(){
        return $this->sensordoportamalas;
    }

    public function getangulodaportadoportamalas(){
        return $this->angulodaportadoportamalas;
    }
    public function gettravadoportamalas(){
       return $this->travadoportamalas;
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
   public function settravadoportamalas($travadoportamalas){
       $this->travadoportamalas=$travadoportamalas;
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
