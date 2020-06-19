<?php
    require 'config/Config.php';
    $usuario = new Usuario();    
    if($usuario->autenticar()){                            
?>
<html>
    <head>        
        <meta charset="UTF-8">
        <title>Productos</title>        
    </head>
    <body>        
        <h1>Hola</h1>
    </body>
</html>
<?php } else {include 'vistas/formLogin.php';} ?>