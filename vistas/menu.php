<?php


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
                        <li>Pedidos</li>
                        <li>Clientes</li>
                        <li class="logo"><img src="img/logo_sapo.png"></li>
                        <li>Productos</li>   
                        <li>Listados</li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>    
</div>
