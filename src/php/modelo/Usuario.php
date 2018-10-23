<?php
class Usuario
{

 private $idUsuario;
 private $nome;
 private $sobrenome;
 private $email;
 private $senha;

 public function __construct(String $nome, String $sobrenome, String $email)
 {
  if ($nome == "" || $nome == null || $sobrenome == "" || $sobrenome == null || $email == "" || $email == null) {
   throw new Exception("Todos os campos são necessario");
  }

  $this->nome      = $nome;
  $this->sobrenome = $sobrenome;
  $this->email     = $email;
 }

 public function getIdUsuario()
 {
  return $this->idUsuario;
 }
 public function setIdUsuario(int $id)
 {
  $this->idUsuario = $id;
 }

 public function getNome()
 {
  return $this->nome;
 }
 public function setNome(String $nome)
 {
  $this->nome = $nome;
 }

 public function getSobrenome()
 {
  return $this->sobrenome;
 }
 public function setSobrenome(String $sobrenome)
 {
  $this->sobrenome = $sobrenome;
 }
 
 public function getEmail()
 {
  return $this->email;
 }
 public function setEmail(String $email)
 {
  $this->email = $email;
 }
 
 public function getSenha()
 {
  return $this->senha;
 }
 public function setSenha(String $senha)
 {
  $this->senha = md5($senha);
 }

}
