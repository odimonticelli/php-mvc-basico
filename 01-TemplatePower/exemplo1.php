<?php
//referência da classe
require_once('class.TemplatePower.php');

//criação do objeto, informando qualé o "layout"
$tpl = new TemplatePower('exemplo1.htm');

//usa o método que "prepara" o documento
$tpl->prepare();

//---------- INI PROCESSAMENTO ---------------

$txt = 'Servidor: ' . $_SERVER['SERVER_SOFTWARE'];

//método que faz a substituição da marcação por algum valor
$tpl->assign('msg', $txt);

//---------- FIM PROCESSAMENTO ---------------

//envia tudo pro navegador
$tpl->printToScreen();
?>