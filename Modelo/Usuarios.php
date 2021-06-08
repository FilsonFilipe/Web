<?php

include_once 'Pessoa.php';
class Usuarios {
private $idUsuario;
private $tipoUsuario;
private $dataCadastro;

function getIdUsuario() {
    return $this->idUsuario;
}

function getTipoUsuario() {
    return $this->tipoUsuario;
}

function getDataCadastro() {
    return $this->dataCadastro;
}

function setIdUsuario($idUsuario) {
    $this->idUsuario = $idUsuario;
}

function setTipoUsuario($tipoUsuario) {
    $this->tipoUsuario = $tipoUsuario;
}

function setDataCadastro($dataCadastro) {
    $this->dataCadastro = $dataCadastro;
}


}
