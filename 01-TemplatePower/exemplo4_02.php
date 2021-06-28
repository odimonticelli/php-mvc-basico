<?php
require_once('class.TemplatePower.php');

$tpl = new TemplatePower('exemplo4_master.htm');

//o "assignInclude()" deve ser usado antes do "prepare()"
$tpl->assignInclude('conteudo', 'exemplo4_02.htm');

$tpl->prepare();

//---------- INI PROCESSAMENTO ---------------



//---------- FIM PROCESSAMENTO ---------------

$tpl->printToScreen();
?>