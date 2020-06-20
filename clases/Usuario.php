<?php

class Usuario{
    
    private $Id_Usuario;
    private $Usuario_Login;
    private $Clave;
    private $Nombre_Vendedor;
    private $Codigo_Vendedor;
    
    public function autenticar(){
        if(isset($_SESSION['logueado']))
            return true;
        else
            return false;
    }
    
}

