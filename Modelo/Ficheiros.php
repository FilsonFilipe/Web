<?php
include_once 'Veiculos.php';
class Ficheiros extends Veiculos{
private $idFicheiro;
private $livrete;
private $tituloPropriedade;
private $seguroRespo;
private $inspecao;
private $taxaCirculacao;
private $biDono;
private $financas;

function getIdFicheiro() {
    return $this->idFicheiro;
}

function getLivrete() {
    return $this->livrete;
}

function getTituloPropriedade() {
    return $this->tituloPropriedade;
}

function getSeguroRespo() {
    return $this->seguroRespo;
}

function getInspecao() {
    return $this->inspecao;
}

function getTaxaCirculacao() {
    return $this->taxaCirculacao;
}

function getBiDono() {
    return $this->biDono;
}

function getFinancas() {
    return $this->financas;
}

function setIdFicheiro($idFicheiro) {
    $this->idFicheiro = $idFicheiro;
}

function setLivrete($livrete) {
    $this->livrete = $livrete;
}

function setTituloPropriedade($tituloPropriedade) {
    $this->tituloPropriedade = $tituloPropriedade;
}

function setSeguroRespo($seguroRespo) {
    $this->seguroRespo = $seguroRespo;
}

function setInspecao($inspecao) {
    $this->inspecao = $inspecao;
}

function setTaxaCirculacao($taxaCirculacao) {
    $this->taxaCirculacao = $taxaCirculacao;
}

function setBiDono($biDono) {
    $this->biDono = $biDono;
}

function setFinancas($financas) {
    $this->financas = $financas;
}



}
