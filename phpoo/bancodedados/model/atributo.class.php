<?php
class atributo {

    // ATRIBUTOS
    private $id_atributo;
    private $nome;
    private $grupo;
    private $ativo;
   

    // MÉTODOS GETTERS E SETTERS

    public function getid_atibuto(){
        return $this->id_atributo;
      }
       public function getnome(){
            return $this->nome;
       }
            public function getgrupo(){
                return $this->grupo;
        }

        public function getativo(){
            return $this->ativo;
    }

    public function setid_atributo($id_atributo){
        $this->id_TRIBUTO = $id_atributo;
    }

    public function setnome($nome){
        $this->nome = $nome;
    }

    public function setgrupo($grupo){
        $this->grupo = $grupo;
    }
    
    public function setativo($ativo){
        $this->ativo = $ativo;
    }
         
     }



?>
