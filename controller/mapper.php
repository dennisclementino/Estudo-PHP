<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$serverArr = explode('&', $_SERVER['QUERY_STRING']);

$controolerArr = explode('=', $serverArr[0]);

$actionArr = explode('=', $serverArr[1]);

$controller = $controolerArr[1];
$action = $actionArr[1];

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$class = trim(ucfirst(strtolower($controller))) . "Controller";    
$item = new $class(); 

$item->$action();











