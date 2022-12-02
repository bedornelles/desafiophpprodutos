<?php

class ProdutModel{

    var $Connection;

    public function __construct()
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass->openConnect();
        $this->Connection = $connectClass->getConn();
    }

    public function listProduts(){


        $sql='SELECT * from products2';
        return $this->Connection->query($sql);
        
    }

    public function insertProdut($produt)
    {
      
        $sql = "
          INSERT INTO products2
            (name,valor,descricao,estoque)
            VALUES(
             '{$produt['name']}',
             '{$produt['value']}',
             '{$produt['description']}',
             '{$produt['category']}',
             
             )
        ";

        $this->Connection->query($sql);
        return $this->Connection->insert_id;
       
    }
}