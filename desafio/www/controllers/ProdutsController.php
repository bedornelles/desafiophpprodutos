<?php

class ProdutsController
{


    var $produtModel;

    public function __construct()
    {

        require_once('models/ProdutModel.php');
        $this->produtModel = new produtModel();
    }

    public function produtsRegister()
    {
        require_once('views/templates/header.php');
        require_once('views/produt/produtsRegister.php');
        require_once('views/templates/footer.php');
    }

    public function produtsRegisterAction()
    {
        $produt = array(
            'name' => $_POST['name'],
        );


        $this->produtModel->insertProdut($produt);
        header('Location:?controller=produt&action=listProduts');
    }

    public function produtsView()
    {

        $arrayProducts = array(
            'nameprodut' => $_POST['nameprodut'],
            'discription' => $_POST['discription'],
            'category' => $_POST['category'],
            'value' => $_POST['value'],

        );

        require_once('views/templates/header.php');
        require_once('views/produt/produtsView.php');
        require_once('views/templates/footer.php');
    }

    public function listProduts()
    {
        require_once('models/ProdutModel.php');
        $produtModel = new ProdutModel();
        $result = $produtModel->listProduts();

        $arrayProducts = array();
        while ($line = $result->fetch_assoc()) {
            array_push($arrayProducts, $line);
        }

        require_once('views/templates/header.php');
        require_once('views/produt/listproduts.php');
        require_once('views/templates/footer.php');
    }
}
