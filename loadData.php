<?php
require 'config/Config.php';

if(!empty(isset($_GET))){
    if(isset($_GET['login'])){
        $usuario = new Usuario();
        
        echo $usuario->login();
    }
}

