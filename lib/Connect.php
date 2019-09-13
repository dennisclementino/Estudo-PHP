<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connect
 *
 * @author dennis.silva
 */
class Connect {

    //put your code here

    const USERNAME = "root";
    const PASSWORD = "";
    const HOST = "localhost";
    const DB = "login";

    public function getConnection() {

        try {

            $username = self::USERNAME;
            $password = self::PASSWORD;
            $host = self::HOST;
            $db = self::DB;
            $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);

            return $connection;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function query($sql) {
        $connection = $this->getConnection();
        $stmt = $connection->query($sql);
        return $stmt;
    }

    public function queryArgs($sql, $args) {
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

}
