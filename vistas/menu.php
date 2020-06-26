<?php
    if(isset($_GET['vista']))
        $vista = $_GET['vista'];
    else
        $vista = 'vistaProductos';
    
    function actual($actual,$vista){
        if($actual == $vista)
            echo "class='active'";
    }
    
?>

<div class="nav-color">
    <div class="nav-wrap">
        <?php if(isset($_SESSION)){ ?>
        <div id="lang-selector" ng-controller="loginController">
            <a href="" ng-click="logout()" class="active"><?php if(isset($_SESSION['Nombre_Vendedor'])) echo 'Cerrar Sesión' ?></a>
            |
            <a href=""><?php if(isset($_SESSION['Nombre_Vendedor'])) echo $_SESSION['Nombre_Vendedor'] ?></a>
        </div>
        <?php } ?>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li <?php actual('vistaProductos',$vista); ?> ><a href="?vista=vistaProductos">Productos</a></li>
                        <li <?php actual('vistaClientes',$vista); ?>><a href="?vista=vistaClientes">Clientes</a></li>
                        <li class="logo"><img src="img/logo_sapo.png"></li>
                        <li <?php actual('vistaPedidos', $vista); ?>><a href="?vista=vistaPedidos">Pedidos</a></li>   
                        <li <?php actual('vistaListados', $vista); ?> ><a href="?vista=vistaListados">Listados</<a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>    
</div>
