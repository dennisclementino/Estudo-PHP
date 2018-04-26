<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author dennis.silva
 */

include '../Interface/IClass.php';

class Produto implements IClass{

    private $id;
    private $codigo;
    private $nome_produto;
    private $valor;
    private $descricao;
    
    public function getObjectVars() {
        return get_object_vars($this);
    }

    public function setClass($data) {

        $this->setId(isset($data['id']) ? $data['id'] : '');
        $this->setCodigo(isset($data['codigo']) ? $data['codigo'] : '');
        $this->setNome_produto(isset($data['nome_produto']) ? $data['nome_produto'] : '');
        $this->setValor(isset($data['valor']) ? $data['valor'] : '');
        $this->setDescricao(isset($data['descricao']) ? $data['descricao'] : '');
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome_produto() {
        return $this->nome_produto;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNome_produto($nome_produto) {
        $this->nome_produto = $nome_produto;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }



}
