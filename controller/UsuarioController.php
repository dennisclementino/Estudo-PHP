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
include '../bussiness/BussinessUsuario.php';

class UsuarioController {

    //put your code here

    private $bussiness;

    public function __construct() {
        $this->bussiness = new BussinessUsuario();
    }

    public function index() {
        $return = $this->bussiness->index();
        include '../View/usuario/index.php';
    }
    
    
    public function forn(){
        include '../View/usuario/forn.php';
    }
    
    public function save(){
        $this->bussiness->save();
        $return = $this->bussiness->index();
        include '../View/usuario/index.php';
    }
    
    
    

}
