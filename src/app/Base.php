<?php 

namespace App;

class Base 
{
    
    protected $objPDO;

    public function __construct($config){
       
        $this->conecta($config->dsn, $config->usuario, $config->senha);

    }

    public function conecta($dsn, $usuario, $senha){        
        try{
            $this->objPDO = new \PDO($dsn,$usuario,$senha);
            
        }catch (Exception $e) {
            echo  $e . "Erro ao se conectar ao banco de dados.";
        }
    }
    public function prepare($sql){
        return $query = $this->objPDO->prepare($sql);

        
    }

    public function desconecta(){
        $this->objPDO = null;

        return "Desconectou";
    }
}