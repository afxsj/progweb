<?php

date_default_timezone_set("Brazil/East");

class Connection{
    private $connection;
    private $parameters= array(
        "host"=>"localhost",
        "user"=>"root",
        "password"=>"",
        "database"=>"bd_caixa",
    );

    //método de abertura de conexão

    public function openConnection(){
        $this->connection=mysqli_connect(
                                         $this->parameters["host"],
                                         $this->parameters["user"],
                                         $this->parameters["password"]

        );

        if(!$this->connection){
            die("Erro ao estabelecer conexão com a base de dados");
        }else{
            $this->selectdatabase();
        }





        

    }

    //método de seleção database
    private function selectdatabase (){
        $database = mysqli_select_db($this->connection, $this->parameters["database"]);

        if(!$database){

        }
        mysqli_query ($this->connection,"SET NAMES 'stf8'");
        mysqli_query ($this->connection,'SETcharacter_set_connection = stf8');
        mysqli_query ($this->connection,'SETcharacter_set_client = stf8');
        mysqli_query ($this->connection,'SETcharacter_set_results = stf8');
    }
    //método de retorno d econexão

     public function getconnection(){
         return $this-> connection;
     }
     //método de fechamento de conexão

     public function closeconnection(){
         mysqli_close($this->connection);
     }


    }
     

?>