<?php

class Categoria {
    //atributos privados
private $idCategoria;
private $nomeCategoria;

function getIdCategoria() {
    return $this->idCategoria;
}

function getNomeCategoria() {
    return $this->nomeCategoria;
}

function setIdCategoria($idCategoria) {
    $this->idCategoria = $idCategoria;
}

function setNomeCategoria($nomeCategoria) {
    $this->nomeCategoria = $nomeCategoria;
}


}
