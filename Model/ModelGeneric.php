<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelGeneric
 *
 * @author dennis.silva
 */
include '../Interface/IModelGeneric.php';
include '../Lib/Connect.php';

class ModelGeneric extends Connect implements IModelGeneric{
  
    public function delete($table, $id) {
        return $this->query('delete from '.$table.' where id='.$id);
    }

    public function listAll($table) {
        
        return $this->query('select * from '.$table);
        
    }

    public function listId($table, $id) {
        return $this->query('select * from '.$table.' where id='.$id);
    }

    public function salve($table, $dados) {
        
    }

    public function update($table, $dados) {
        
    }

}
