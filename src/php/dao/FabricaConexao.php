<?php
class FabricaConexao
{

 private static $host   = "mysql:host=localhost";
 private static $dbName = "";
 private static $user   = "";
 private static $pass   = "";

 public function __construct()
 {
  throw new Exception("Essa classe não pode ser instaciada");
 }

 public static function pegarConexao()
 {
  return new PDO($host, $dbName, $user, $pass);
 }

}
