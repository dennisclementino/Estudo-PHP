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
interface IClass {
    //put your code here
    
    //Metodo que recupera a class em array;
    public function getObjectVars();
    
    //Metodo que seta valores do POST;
    public function setClass($data);
    
}
