<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BussinessProduto
 *
 * @author dennis.silva
 */
include '../model/ModelProduto.php';
include '../classes/Produto.php';

class BussinessProduto extends ModelProduto {

    //put your code here

    private $produto;

    public function __construct() {
        $this->produto = new Produto();
    }

    public function index() {

        return $this->listAll('produto');
    }

    public function save() {
        $this->produto->setClass($_POST);
        return $this->salve('produto',$this->produto);
    }

}
