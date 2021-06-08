<?php
include_once 'Veiculos.php';
class Licenca extends Veiculos{
private $id_licenca;
private $tipoLicenca;
private $data_emissao;
private $dataCaducidade;

function getId_licenca() {
    return $this->id_licenca;
}

function getTipoLicenca() {
    return $this->tipoLicenca;
}

function getData_emissao() {
    return $this->data_emissao;
}

function getDataCaducidade() {
    return $this->dataCaducidade;
}

function setId_licenca($id_licenca) {
    $this->id_licenca = $id_licenca;
}

function setTipoLicenca($tipoLicenca) {
    $this->tipoLicenca = $tipoLicenca;
}

function setData_emissao($data_emissao) {
    $this->data_emissao = $data_emissao;
}

function setDataCaducidade($dataCaducidade) {
    $this->dataCaducidade = $dataCaducidade;
}


}
