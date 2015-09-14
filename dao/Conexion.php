<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author YeisonDavid
 */
class Conexion {
    protected $cnn;
    
    function cnnDb(){
        $this->cnn = new mysqli("localhost:3307", "root", "yeicomoner", "tiendaonline") or die ("Error Conexion");
        return $this->cnn;
    }
}
