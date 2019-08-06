<?php
class tipo{
     // atributos
     private $id_tipo;
     private $nome;
     private $descricao;
     private $ativo;

     function __construct($p1,$p2,$p3,$p4){
         $this-> setid_tipo($p1);
         $this-> setnome($p2);
         $this-> setdescricao($p3);
         $this-> setativo($p4);
         


            return $this;
     }
      // MÉTODOS GETTERS E SETTERS

      public function getid_tipo(){
        return $this->id_tipo;
      }
       public function getnome(){
            return $this->nome;
       }
            public function getdescricao(){
                return $this->descricao;
        }

        public function getativo(){
            return $this->ativo;
    }

    public function setid_tipo($id_tipo){
        $this->id_tipo = $id_tipo;
    }

    public function setnomeo($nome){
        $this->nome = $nome;
    }

    public function setdescricao($descricao){
        $this->descricao = $descricao;
    }
    
    public function setativo($ativo){
        $this->ativo = $ativo;
    }
         
     }



?>