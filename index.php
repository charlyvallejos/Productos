<?php
    require 'config/Config.php';
    $usuario = new Usuario();    
    if($usuario->autenticar()){                            
?>
<html ng-app="appProductos">
    <head>        
        <meta charset="UTF-8">
        <title>Productos</title>        
    </head>
    <body ng-controller="productosController">        
        <h1>Bienvenido mother fucker</h1>
        <button ng-click="logout()">Cerrar Sesion</button>
        
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
    <script src="js/angular.min.js"></script>
    <script src="js/dirPagination.js"></script>
    <script src="js/app.js"></script>
    <script src="js/login.js"></script>
    <script src="https://code.angularjs.org/1.3.0-rc.2/angular-messages.js"></script>    
    </body>
</html>
<?php } else {include 'vistas/formLogin.php';} ?>
