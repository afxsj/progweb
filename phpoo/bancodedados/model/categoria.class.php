<?php
class categoria{
    private $id_categoria;
    private $nome;

    function __construct($p1,$p2){
        $this->setid_categoria($p1);
        $this->setnome($p2);

        return $this;

    }

    public function getid_categoria(){
        return $this->id_categoria;
    }

    public function getnome(){
        return $this->nome;
    }

    public function setnome($nome){
        $this->nome = $nome;
    }

    public function setid_categoria($id_categoria){
        $this->id_categoria = $id_categoria;

}
}


?>