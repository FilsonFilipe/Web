<?php

class Pessoa {
private $id_pessoa;
private $nomePessoa;
private $genero;
private $estadoCivil;
private $numBI;
private $dataNascimento;
private $dataCadastro;

function getId_pessoa() {
    return $this->id_pessoa;
}

function getNomePessoa() {
    return $this->nomePessoa;
}

function getGenero() {
    return $this->genero;
}

function getEstadoCivil() {
    return $this->estadoCivil;
}

function getNumBI() {
    return $this->numBI;
}

function getDataNascimento() {
    return $this->dataNascimento;
}

function getDataCadastro() {
    return $this->dataCadastro;
}

function setId_pessoa($id_pessoa) {
    $this->id_pessoa = $id_pessoa;
}

function setNomePessoa($nomePessoa) {
    $this->nomePessoa = $nomePessoa;
}

function setGenero($genero) {
    $this->genero = $genero;
}

function setEstadoCivil($estadoCivil) {
    $this->estadoCivil = $estadoCivil;
}

function setNumBI($numBI) {
    $this->numBI = $numBI;
}

function setDataNascimento($dataNascimento) {
    $this->dataNascimento = $dataNascimento;
}

function setDataCadastro($dataCadastro) {
    $this->dataCadastro = $dataCadastro;
}



}
