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

include '../Model/';

class BussinessProduto extends ModelProduto {
    //put your code here
    public function index(){
        
       $list =  $this->listAll('produto');
       
       return array('list' => $list);
       
    }
    
    
}
