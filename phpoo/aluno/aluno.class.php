<?php
class aluno{
//Atributos
private $nome;
private $sobrenome;
private $email;
private $telefone;
private $datadenascimento;
private $cidade;
private $estado;




//comportamento de ação 
function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7){
    echo " Dados do aluno ";
    //guardando valores
    $this->setnome($p1);
    $this->setsobrenome($p2);
    $this->setemail($p3);
    $this->settelefone($p4);
    $this->setdatadenascimento($p5);
    $this->setcidade($p6);
    $this->setestado($p7);

    echo " nome ".$this->getnome()."<br>";
    echo " sobrenome ".$this->getsobrenome()."<br>";
    echo "email".$this->getemail()."<br>";
    echo "telefone".$this->gettelefone()."<br>";
    echo "datadenascimento".$this->getdatadenascimento()."<br>";
    echo "cidade".$this->getcidade()."<br>";
    echo "estado".$this->getestado()."<br>";

   



}
  //getters
    public function getnome(){
        return $this->nome;
    }

    public function getsobrenome(){
        return $this->sobrenome;

    }

    public function getemail(){
        return $this->email;

    }

    public function gettelefone(){
        return $this->telefone;

    }
        
    public function getdatadenascimento(){
        return $this->datadenascimento;

    }
    public function getcidade(){
        return $this->cidade;
    }
    public function getestado(){
        return $this->estado;
    }
   //Setters

   public function setnome($nome){
    $this->nome=$nome;
}
public function setsobrenome($sobrenome){
    $this->sobrenome=$sobrenome;
}
public function setemail ($email){
    $this->email=$email;
}
public function settelefone ($telefone){
    $this->telefone=$telefone;
}

public function setdatadenascimento ($datadenascimento){
    $this->datadenascimento=$datadenascimento;
}

public function setcidade ($cidade){
    $this->cidade=$cidade;
}

public function setestado ($estado){
    $this->estado=$estado;
}


   


public function aniversario(){
    $data=$this->getdatadenascimento ();//12/05/1982

list($dia,$mes,$ano)= explode('/',$data);

if(date('m')==$mes and date('d')==$dia){
    echo "Parabéns, hoje é o seu aniversário!";
     

}else{
    $niver="";
}
}
}



?>