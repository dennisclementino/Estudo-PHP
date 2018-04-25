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
include '../interface/IModelGeneric.php';
include '../lib/Connect.php';

class ModelGeneric extends Connect implements IModelGeneric {

    public function delete($table, $id) {

        try {

            $list = $this->query('delete from ' . $table . ' where :id', array('id' => $id));


            $return = array();
            while ($row = $list->fetch(PDO::FETCH_ASSOC)) {
                $return[] = $row;
            }

            return $return;
        } catch (PDOException $e) {
            // imprimimos a nossa excecao
            echo $e->getMessage();
        }
    }

    public function listAll($table) {

        try {

            $list = $this->query('select * from ' . $table);

            $return = array();
            while ($row = $list->fetch(PDO::FETCH_ASSOC)) {
                $return[] = $row;
            }

            return $return;
        } catch (PDOException $e) {
            // imprimimos a nossa excecao
            echo $e->getMessage();
        }
    }

    public function listId($table, $id) {

        try {

            $list = $this->query('select * from ' . $table . ' where :id', array('id' => $id));

            $return = array();
            while ($row = $list->fetch(PDO::FETCH_ASSOC)) {
                $return[] = $row;
            }

            return $return;
        } catch (PDOException $e) {
            // imprimimos a nossa excecao
            echo $e->getMessage();
        }
    }

    public function salve($table, $dados) {
         try {

            $list = $this->query('select * from ' . $table . ' where :id', array('id' => $id));

            $return = array();
            while ($row = $list->fetch(PDO::FETCH_ASSOC)) {
                $return[] = $row;
            }

            return $return;
        } catch (PDOException $e) {
            // imprimimos a nossa excecao
            echo $e->getMessage();
        }
    }

    public function update($table, $dados) {
        
    }

}
