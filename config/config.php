<?php

function AutoLoader($nombreClase){
    require_once "clases/".$nombreClase.".php";
}
spl_autoload_register('AutoLoader');

