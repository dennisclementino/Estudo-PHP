<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerProduto
 *
 * @author dennis.silva
 */
include '../bussiness/BussinessProduto.php';

class ProdutoController {

    //put your code here

    private $bussinessProduto;

    public function __construct() {
        $this->bussinessProduto = new BussinessProduto();
    }

    public function index() {
        $return = $this->bussinessProduto->index();
        include '../View/produto/index.php';
    }
    
    
    public function forn(){
        include '../View/produto/forn.php';
    }
    
    public function save(){
        $this->bussinessProduto->save();
    }
    
    
    

}
