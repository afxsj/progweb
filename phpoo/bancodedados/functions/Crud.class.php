<?php



//importa classes

require_once("../../functions/connection.class.php");

abstract class Crud{
    //atributos
    private $tabela;

    //construtor

    public function __construct($tabela){
        $this->tabela=$tabela;
    }

    //método de selecão de tabelas

    public function select (){
        $sql = "select * from " .$this->tabela.";";
        return mysqli_fetch_array($this->execute_query($sql));
    }
    
        //método de execução das consultas 

        public function execute_query ($sql){
            $conn = new Connection;
            $conn->openConnection();
            $executed = mysql_query(
                                   $conn-> getConnection(),
                                   $sql )
                                   or die("Erro". mysqli_error($conn->getConnection())). "na query". $sql);
                            $conn->closeconnection();
                            return $executed;    
        }
    }

?>