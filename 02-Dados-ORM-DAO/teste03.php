<?php
//faz o include da classe
require_once('class.UsuarioDAO.php');
require_once('class.TemplatePower.php');

//cria o objeto
$tpl = new TemplatePower('teste03.html');
$tpl->prepare();


    //usa o método do objeto para substituir a marcação no HTML por um valor

    //criação do objeto de dados (DAO)
    $dao = new UsuarioDAO();
    $res = $dao->selectAll();

    foreach ($res as $vet) {
        $nom = $vet['nome'];
        $ema = $vet['email'];
        $tip = $vet['tipo'];

        $tpl->newBlock('users');
        $tpl->assign('nom', $nom);
        $tpl->assign('ema', $ema);
        $tpl->assign('tip', $tip);
    }


//envia para o navegador
$tpl->printToScreen();
?>