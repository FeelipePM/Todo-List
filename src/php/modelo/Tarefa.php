<?php

class Tarefa
{

 private $idTarefa;
 private $titulo;
 private $descricao;
 private $dataLimite;
 private $dataCriacao;
 private $status;

 public function __construct(String $titulo, String $descricao, $dataLimite='0000-00-00')
 {
  date_default_timezone_set('America/Sao_Paulo');
  $date              = new DateTime($dataLimite);
  
  $this->titulo      = $titulo;
  $this->descricao   = $descricao;
  $this->dataLimite  = $date->format('Y-m-d H:i');
  $this->dataCriacao = date('Y-m-d H:i');
  $this->status = 1; // 1 - ativo; 2 - vai expirar; 3 - atrasado; 
 }

 public function getIdTarefa()
 {
  return $this->idTarefa;
 }

 public function setIdTarefa(int $idTarefa)
 {
  $this->idTarefa = $idTarefa;
 }

 public function getTitulo()
 {
  return $this->titulo;
 }

 public function setTitulo(String $titulo)
 {
  $this->titulo = $titulo;
 }

 public function getDescricao()
 {
  return $this->descricao;
 }

 public function setDescricao(String $descricao)
 {
  $this->descricao = $descricao;
 }

 public function getDataLimite()
 {
  return $this->dataLimite;
 }

 public function setDataLimite(String $dataLimite)
 {
  $this->dataLimite = $dataLimite;
 }

 public function getDataCriacao()
 {
  return $this->dataCriacao;
 }

 public function setDataCriacao(String $dataCriacao)
 {
  $this->dataCriacao = $dataCriacao;
 }
 public function getStatus()
 {
  return $this->status;
 }

 public function setStatus(int $status)
 {
  $this->status = $status;
 }

}
