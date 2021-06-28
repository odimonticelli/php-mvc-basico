<?php
require_once('../_inc/class.TemplatePower.php');

//cria o objeto relacionado ao view
$tpl = new TemplatePower('../view/lista.html'); 
$tpl->prepare();

// ---------- INI PROCESSAMENTO ------------

    //aqui a programação 

    //include do "autoload"
    require_once('../_inc/inc.autoload.php');

    //cria o objeto DAO
    $dao = new TituloDAO();

    //usa os métodos
    $res = $dao->select("select * from titulo ");
    $num = $dao->rows($res);
    
    //manipula o resultado
    foreach ($res as $vet) {
        $cod = $vet['codigo'];
        $des = $vet['descricao'];
        $val = $vet['valor'];
        $dat = $vet['data_vencimento'];
        $sta = $vet['status'];

        $tpl->newBlock('tits');
        $tpl->assign('cod', $cod);
        $tpl->assign('des', $des);
        $tpl->assign('val', $val);
        $tpl->assign('dat', $dat);
        $tpl->assign('sta', $sta);
    }

// ---------- FIM PROCESSAMENTO ------------

$tpl->showUnAssigned(false);
$tpl->printToScreen();
?>