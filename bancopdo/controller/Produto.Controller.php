<?php
include_once("../model/Produto.class.php");

class ProdutoController{

    private $produto;

    function __construct()
    {
        $this->produto = new Produto();
    }

    public function imprimeProduto(){
        $this->produto->imprimeProduto();
    }
}
?>