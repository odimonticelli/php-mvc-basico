<?php

class DbAdmin
{
    private $link; 
    private $user; 
    private $pass; 
    private $opts; 

    public function __construct() {

        //$this->link = 'oci:dbname=dbtest';
        $this->link = 'mysql:dbname=alga1';
        $this->user = 'root';
        $this->pass = '';
        $this->opts = array(PDO::ATTR_AUTOCOMMIT=>TRUE);
    }

    public function getLink() {
        return $this->link;
    }
    public function getUser() {
        return $this->user;
    }
    public function getPass() {
        return $this->pass;
    }
    public function getOpts() {
        return $this->opts;
    }
}

?>