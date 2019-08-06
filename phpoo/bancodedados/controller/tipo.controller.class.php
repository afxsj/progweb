<?php
require_once ("../../functions/crud.class.php");
class tipocontoller extends Crud{
    
    private $tabelafilha="tipo";

    public function __construct(){
        parent:: __construct($this->tabelafilha);

    }
      
    }

?>