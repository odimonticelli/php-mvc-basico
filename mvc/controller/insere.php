<?php
require_once('../_inc/class.TemplatePower.php');

//cria o objeto relacionado ao view
$tpl = new TemplatePower('../view/insere.html'); 
$tpl->prepare();

// ---------- INI PROCESSAMENTO ------------

    //aqui a programação 

    //se enviou os dados, pega, cria o objeto e grava
    if (isset($_POST['act']) && $_POST['act']=='insert') 
    {
        //pegar os dados enviados do form
        $des = $_POST['des'];
        $val = $_POST['val'];
        $sta = $_POST['sta'];

        //include do "autoload"
        require_once('../_inc/inc.autoload.php');

        //cria o objeto ORM
        $obj = new Titulo();
        $obj->setDescricao($des);
        $obj->setValor($val);
        $obj->setStatus($sta);
        $obj->setData(date('Y-m-d'));

        //cria o objeto DAO
        $dao = new TituloDAO();
        $res = $dao->insert($obj);
        
        //direciona se deu certo
        if ($res) {
            header('location: lista.php');
            exit;
        }
    }

// ---------- FIM PROCESSAMENTO ------------

$tpl->showUnAssigned(false);
$tpl->printToScreen();
?>