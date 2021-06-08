<?php
include_once 'Veiculos.php';
class TipoTaxi {
private $idTaxi;
private $categoria;

function getIdTaxi() {
    return $this->idTaxi;
}

function getCategoria() {
    return $this->categoria;
}

function setIdTaxi($idTaxi) {
    $this->idTaxi = $idTaxi;
}

function setCategoria($categoria) {
    $this->categoria = $categoria;
}


}
