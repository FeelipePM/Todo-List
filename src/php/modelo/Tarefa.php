<?php

class Tarefa
{

 private $idTarefa;
 private $titulo;
 private $descricao;
 private $dataLimite;
 private $dataCriacao;

 public function __construct($titulo, $descricao, $dataLimite)
 {
  date_default_timezone_set('America/Sao_Paulo');
  $this->titulo      = $titulo;
  $this->descricao   = $descricao;
  $date              = new DateTime($dataLimite);
  $this->dataLimite  = $date->format('Y-m-d H:i');
  $this->dataCriacao = date('Y-m-d H:i');
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

}
