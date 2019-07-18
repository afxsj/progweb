<?php
  abstract class Carro{


    //Atributos
    private $marca;
    private $anodefabricacao;
    private $modelo;
    private $cor;
    private $ligado;
    private $velocidade;
    private $velocidademaxima;
    private $tipo;

    //Metodos
    //Comportamento de ação
    function __construct(){
    echo "Criando o Carro<br>";
  }


    //getters
    public function getmarca(){
        return $this->marca;
    }

    public function getAnoDeFabricacao(){
        return $this->anodefabricacao;

    }

    public function getModelo(){
        return $this->modelo;

    }

    public function getcor(){
        return $this->cor;

    }
        
    public function getligado(){
        return $this->ligado;

    }
    public function getvelocidade(){
        return $this->velocidade;
    }
    public function getvelocidademaxima(){
        return $this->velocidademaxima;
    }
    public function gettipo(){
        return $this->tipo;
     }

    //seters
    public function setMarca($marca){
        $this->marca=$marca;
    }
    public function setAnoDeFabricacao($anodefabricacao){
        $this->anodefabricacao=$anodefabricacao;
    }
    public function setmodelo ($modelo){
        $this->modelo=$modelo;
    }
    public function setcor ($cor){
        $this->cor=$cor;
    }

    public function setligado ($ligado){
        $this->ligado=$ligado;
    }

    public function setVelocidade ($velocidade){
        $this->velocidade=$velocidade;
    }

    public function setVelocidadeMaxima ($velocidademaxima){
        $this->velocidademaxima=$velocidademaxima;
    }
    public function settipo ($tipo){
        $this->tipo=$tipo;
    }


    //Ligar e desligar
    public function ligaredesligar(){
        echo "INICIANDO A IGNIÇÂO <br>";
        echo "Status atual:".$this->ligado."<br>";
        if($this->ligado==false){
            $this->ligado=true;
            echo "Ligando o carro...".$this->ligado."<br>";

        }else {
            $this->ligado=false;
            echo "desligando o carro...".$this->ligado."<br>";
        }
        echo "FINALIZANDO A IGNIÇÂO <br>";
    }
    //acelerar
    public function acelerar(){
        echo "INICIANDO ACELERAÇÂO<br>";
        echo "Velocidade atual:".$this->velocidade."<br>";
        echo "Velocidade máxima:".$this->velocidademaxima."<br>";

        if($this->ligado==true){
            while($this->velocidade<=$this->velocidademaxima){
                echo "Acelerando...".$this->velocidade."<br>";
                $this->velocidade++;
            }
        }else{
            echo "Ocarro está desligado<br>";
        }
        echo "FINALIZANDO ACELERAÇÂO<br>";
        echo "=========================================<br><br>";


    }


}


?>


