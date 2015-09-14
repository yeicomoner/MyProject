<?php
include_once 'Conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PedidosDAO
 *
 * @author YeisonDavid
 */
class PedidosDAO {
    
    protected $cnn;
    
    function __construct(){
        $this->cnn = new Conexion();
    }
    
    public function ConsultaProductos(){
        $r = mysqli_query($this->cnn->cnnDb(), "Select * from productos");
     return $r;
    }
}
