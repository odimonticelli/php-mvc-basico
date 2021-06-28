<?php
require_once('class.TemplatePower.php');

$tpl = new TemplatePower('exemplo3.htm');
$tpl->prepare();

//---------- INI PROCESSAMENTO ---------------

$num = 12;
for ($i=0; $i<$num; $i++) {
	$nome = 'Produto '.rand($i, 100);
	
	$tpl->newBlock('prods');
	$tpl->assign('nome', $nome);
}

//---------- FIM PROCESSAMENTO ---------------

$tpl->printToScreen();
?>