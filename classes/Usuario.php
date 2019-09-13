<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author luiz.oliveira
 */
class Usuario {
    //put your code here
    private $id;
    private $nome;
    
    public function getArrayCopy() {
        return get_object_vars($this);
    }
    
    public function setClass($data) {
        $this->setNome(isset($data['nome']) ? $data['nome'] : '');
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}
