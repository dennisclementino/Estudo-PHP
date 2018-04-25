<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author dennis.silva
 */
interface IBussinessGeneric {
    //put your code here
    
   public function delete($table,$id) ;

    public function listAll($table); 

    public function listId($table,$id) ;
    
    public function salve($table,$dados);

    public function update($table,$dados);
    
}
