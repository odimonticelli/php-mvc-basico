<?php
class UsuarioDAO 
{

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:dbname=javatender', 'root', '');
    }

    //metodo que retorna todos
    public function selectAll() {
        $sql = "select * from usuario";
        $res = $this->pdo->query($sql);
        return $res;
    }

    //metodo para insert
    public function insert($obj) {
        $nom = $obj->getNome();
        $ema = $obj->getEmail();
        $tip = $obj->getTipo();
        $ati = $obj->getAtivo();

        //monta o SQL
        $sql = "insert into usuario (nome, email, tipo, ativo)
                values ('$nom', '$ema', '$tip', '$ati') ";
        //executa e retorna
        $res = $this->pdo->query($sql);
        return $res;
    }

    //meotod para update

    //metodo para delete

}
?>