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
include '../model/ModelUsuario.php';
include '../classes/Usuario.php';

class BussinessUsuario extends ModelUsuario {

    //put your code here
    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    public function index() {

       return $this->listAll('usuario');
    }

    public function save() {
        $this->usuario->setClass($_POST);
        return $this->salvar('usuario',$this->usuario->getArrayCopy());
    }

}
