<?php

if (isset($_REQUEST['url']) && !empty($_REQUEST['url']))
{
    $url = $_REQUEST['url'];
    //se vier parametro (?) separar e enviar depois do .php

    //direciona
    header("location: ./controller/$url.php");
}

?>