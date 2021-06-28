<?php
//faz o include da classe
require_once('class.TemplatePower.php');

//cria o objeto
$tpl = new TemplatePower('teste02.html');
$tpl->prepare();


    //usa o método do objeto para substituir a marcação no HTML por um valor

    //conexao com o banco
    $pdo = new PDO('mysql:dbname=javatender', 'root', '');
    $sql = "select * from usuario";
    $res = $pdo->query($sql);
    
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