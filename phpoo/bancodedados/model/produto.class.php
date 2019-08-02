<?php
class categoria{
    private $id_produto;
    private $nome;
    private $descricao;
    private $sku;
    private $ean;
    private $valorunitario;
    private $id_categoria;
   
    
    
    
    function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7){
        $this->setid_produto($p1);
        $this->setnome($p2);
        $this->setdescrcao($p3);
        $this->setsku($p4);
        $this->setidean($p5);
        $this->setivalorunitario($p6);
        $this->setid_categoria($p7);
       
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