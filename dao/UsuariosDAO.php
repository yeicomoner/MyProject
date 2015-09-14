<?php
include_once 'Conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuariosDAO
 *
 * @author YeisonDavid
 */
class UsuariosDAO {
    
    protected $cnn;
    
    function __construct(){
        $this->cnn = new Conexion();
    }
    
    public function ConsultaUsuario(){
        $r = mysqli_query($this->cnn->cnnDb(), "Select * from Usuarios");
        /*$result=mysql_query("Select * from Usuarios", $this->cnn->cnnDb());
        return $result;*/
     return $r;
    }
}
