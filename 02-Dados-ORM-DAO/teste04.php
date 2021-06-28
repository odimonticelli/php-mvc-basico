<?php
//faz o include da classe
require_once('class.Usuario.php');
require_once('class.UsuarioDAO.php');
require_once('class.TemplatePower.php');

//cria o objeto
$tpl = new TemplatePower('teste04.html');
$tpl->prepare();


    //processamento qdo envia os dados do form
    if (isset($_POST['act']) && !empty($_POST['act']) && $_POST['act']=='insert') 
    {
        //pega os dados que vieram do form (via post)
        $nom = $_POST['nom'];
        $ema = $_POST['ema'];
        $tip = $_POST['tip'];

        //cria o objeto ORM Usuario (getters e setters)
        $obj = new Usuario();
        $obj->setNome($nom);
        $obj->setEmail($ema);
        $obj->setTipo($tip);
        $obj->setAtivo('sim');
        
        //criação do objeto de dados (DAO)
        $dao = new UsuarioDAO();
        $res = $dao->insert($obj);
        if ($res) {
            header('location: teste03.php');
            exit;
        }
    }


//envia para o navegador
$tpl->printToScreen();
?>