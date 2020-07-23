<?php
require 'config/Config.php';

if(isset($_GET['a']))
    $accion = $_GET['a'];
if(isset($_GET['t']))
    $tabla = $_GET['t'];

if(!empty(isset($_GET))){
    if(isset($_GET['login'])){
        $usuario = new Usuario();
        
        echo $usuario->login();
    }
    else if(isset($_GET['logout'])) {
        $usuario = new Usuario();
        $usuario->logout();
    }
    if(isset($accion) && $accion = 'get'){
        if(isset($tabla) && $tabla = 'prodma'){
            $producto = new Producto();
            
        }
    }
}

