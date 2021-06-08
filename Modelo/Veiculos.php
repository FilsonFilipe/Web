<?php

include_once 'Pessoa.php';
class Veiculos extends Pessoa{
private $idVeiculo;
//deve extender de categoria no DAO
private $cor;
private $modelo;
private $anoFabrico;
private $matriculo;
private $numQuadro;
private $numMotor;
private $tara;
private $pesoBruto;
private $lotacao;
private $cilindragem;

function getIdVeiculo() {
    return $this->idVeiculo;
}

function getCor() {
    return $this->cor;
}

function getModelo() {
    return $this->modelo;
}

function getAnoFabrico() {
    return $this->anoFabrico;
}

function getMatriculo() {
    return $this->matriculo;
}

function getNumQuadro() {
    return $this->numQuadro;
}

function getNumMotor() {
    return $this->numMotor;
}

function getTara() {
    return $this->tara;
}

function getPesoBruto() {
    return $this->pesoBruto;
}

function getLotacao() {
    return $this->lotacao;
}

function getCilindragem() {
    return $this->cilindragem;
}

function setIdVeiculo($idVeiculo) {
    $this->idVeiculo = $idVeiculo;
}

function setCor($cor) {
    $this->cor = $cor;
}

function setModelo($modelo) {
    $this->modelo = $modelo;
}

function setAnoFabrico($anoFabrico) {
    $this->anoFabrico = $anoFabrico;
}

function setMatriculo($matriculo) {
    $this->matriculo = $matriculo;
}

function setNumQuadro($numQuadro) {
    $this->numQuadro = $numQuadro;
}

function setNumMotor($numMotor) {
    $this->numMotor = $numMotor;
}

function setTara($tara) {
    $this->tara = $tara;
}

function setPesoBruto($pesoBruto) {
    $this->pesoBruto = $pesoBruto;
}

function setLotacao($lotacao) {
    $this->lotacao = $lotacao;
}

function setCilindragem($cilindragem) {
    $this->cilindragem = $cilindragem;
}


}
