<?php

class TituloDAO 
{
    private $dba; 

    public function __construct() {

        $cfg = new DbAdmin();
        $link = $cfg->getLink();
        $user = $cfg->getUser();
        $pass = $cfg->getPass();
        $opts = $cfg->getOpts();

        $this->dba = new PDO($link, $user, $pass, $opts);
    }

    public function select($sql) {
        $res = $this->dba->query($sql);
        return $res;
    }

    public function insert($obj) {
        $des = $obj->getDescricao();
        $val = $obj->getValor();
        $sta = $obj->getStatus();
        $dat = $obj->getData();
        $sql = "insert into titulo (descricao, valor, data_vencimento, status)
                values ('$des', '$val', '$dat', '$sta')";
        $res = $this->dba->query($sql);
        return $res;
    }

    public function update($sql) {
        $res = $this->dba->query($sql);
        return $res;
    }

    public function delete($sql) {
        $res = $this->dba->query($sql);
        return $res;
    }

    public function rows($res) {
        $num = $res->rowCount();
        return $num;
    }

}

?>