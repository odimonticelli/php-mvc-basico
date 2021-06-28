<?php
require_once('class.TemplatePower.php');

$tpl = new TemplatePower('exemplo2.htm');
$tpl->prepare();

//---------- INI PROCESSAMENTO ---------------

if ( isset($_GET['show']) && $_GET['show']==123 )
{
	$tpl->newBlock('texto');
}

//---------- FIM PROCESSAMENTO ---------------

$tpl->printToScreen();
?>