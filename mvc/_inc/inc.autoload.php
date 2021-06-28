<?php
// será desativada a partir da versao 8
/*
function __autoload($classname)
{
    require_once('../model/class.'.$classname.'.php');
}
*/

function my_autoload ($classname) {
    require_once('../model/class.'.$classname.'.php');
}
//registra na fila de autoload a função própria
spl_autoload_register("my_autoload");

?>