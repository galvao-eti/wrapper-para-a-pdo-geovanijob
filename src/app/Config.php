<?php 

namespace App;
   
      
class Config{

    public $tipo;
    public $host;
    public $porta;
    public $base;
    public $usuario;
    public $senha;
    public $dsn;

 

    public function __construct(string $tipo, string $host,string $base,int $porta, string $usuario, string $senha)
    {

        $this->tipo = $tipo;
        $this->host = $host;
        $this->base = $base;
        $this->porta = $porta;
        $this->usuario = $usuario;
        $this->senha = $senha;  
        $this->dsn = "$tipo:host=$host;dbname=$base";
    }  
}


