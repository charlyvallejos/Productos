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
    
    public function login(){
        $sql = "SELECT * FROM usuarios WHERE Usuario_Login = :usuarioLogin AND Clave = :clave";
        $conexion = Conexion::conectar();
        $query = $conexion->prepare($sql);
        $ok = array("ok" => false);
        if(isset($_POST)){
            $usuarioLogin = $_POST['Usuario_Login'];
            $clave = $_POST['Clave'];
            
            $clave = base64_encode($clave);
            $clave = sha1($clave);
            
            $query->bindParam(":usuarioLogin", $usuarioLogin, PDO::PARAM_STR);
            $query->bindValue(":clave", $clave, PDO::PARAM_STR);
            
            $query->execute();
            if($query->rowCount() > 0){
                $resultado = $query->fetch(PDO::FETCH_ASSOC);
                $_SESSION['logueado'] = 1;
                $_SESSION['Nombre_Vendedor'] = $resultado['Nombre_Vendedor'];
                $_SESSION['Codigo_Vendedor'] = $resultado['Codigo_Vendedor'];
                $ok = array("ok" => true);
            }            
        }
        return json_encode($ok);
    }
    
    public function logout(){
        session_unset();
        session_destroy();
    }
    
    
}

