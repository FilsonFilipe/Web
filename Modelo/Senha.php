<?php
include_once 'Usuarios.php';
class Senha extends Usuarios{
 private $idSenha;
 private $idUsuario;
 private $senha;
 
 function getIdSenha() {
     return $this->idSenha;
 }

 function getIdUsuario() {
     return $this->idUsuario;
 }

 function getSenha() {
     return $this->senha;
 }

 function setIdSenha($idSenha) {
     $this->idSenha = $idSenha;
 }

 function setIdUsuario($idUsuario) {
     $this->idUsuario = $idUsuario;
 }

 function setSenha($senha) {
     $this->senha = $senha;
 }


}
