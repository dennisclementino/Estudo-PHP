<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelProduto
 *
 * @author dennis.silva
 */

include_once '../lib/Connect.php';

class ModelUsuario extends Connect{

    public function salvar($nome, $dados) {
        $stmt = $this->getConnection()->prepare('INSERT INTO '.$nome.' (nome) VALUES(:nome)');
        $stmt->execute(array(
            ':nome' => $dados['nome']
        ));

        return true;
    }
    
     public function listAll($table) {

        try {

            $list =  $this->getConnection()->query('select * from ' . $table);

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

}
