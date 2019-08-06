<?php
require_once ("../../functions/crud.class.php");
class tipocontoller extends Crud{
    
    private $tabelafilha="atributo";

    public function __construct(){
        parent:: __construct($this->tabelafilha);

    }
      
    }

?>