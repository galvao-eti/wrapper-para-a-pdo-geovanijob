<?php

namespace App;

class Categoria {
    public $objPDO;
    private $table = "categoria";
    private $nome;
    private $id;

    public function __construct(){
        $config = new Config('mysql','localhost', 'turma3', 3306, 'root', '');
        $this->objPDO = new Base($config);
    }
    

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function insert($categoria){
        $this->setNome($categoria);
        $sql = "INSERT INTO $this->table (id, nome) VALUES (NULL, ?)";
        $insert = $this->objPDO->prepare($sql);
        $insert->bindValue(1, $this->getNome() );
        $insert->execute();
        $this->objPDO->desconecta();
    }
    
    public function update($id,$categoria){
        $this->setNome($categoria);
        $sql = "UPDATE $this->table SET nome = ? WHERE id = ? LIMIT 1";
        $update = $this->objPDO->prepare($sql);
        $update->bindValue(1, $this->getNome());
        $update->bindValue(2, $id);
        if( $update->execute() ){
            $this->objPDO->desconecta();
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function delete($param){
        $sql = "DELETE FROM $this->table WHERE id = ? LIMIT 1";
        $delete = $this->objPDO->prepare($sql);
        $delete->bindParam(1, $param);
        if( $delete->execute() ){
            return TRUE;
        }else {
            return FALSE;
        }

    }
    
    public function getAll(){
        $sql = "SELECT id, nome FROM $this->table ORDER BY nome";

        $busca = $this->objPDO->prepare($sql);
        $busca->execute();
        return $busca->fetchAll();
    }
    
    public function getOne($param){
        
        $sql = "SELECT id, nome FROM $this->table WHERE id = ? ORDER BY nome LIMIT 1 ";
        $busca = $this->objPDO->prepare($sql);
        $busca->bindParam(1, $param);
        $busca->execute();
        return $busca->fetch();
    }
}