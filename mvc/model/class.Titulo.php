<?php

class Titulo 
{
    private $codigo;
    private $descricao;
    private $valor;
    private $status;
    private $data;

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function getCodigo() {
        return $this->codigo;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function getDescricao() {
        return $this->descricao;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
    public function getValor() {
        return $this->valor;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
    public function getStatus() {
        return $this->status;
    }

    public function setData($data) {
        $this->data = $data;
    }
    public function getData() {
        return $this->data;
    }
}

?>