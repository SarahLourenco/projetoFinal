<?php
abstract class Banco
{
  /**
  * Retorne um objeto PDO conectado
  */
  public static function obterConexao()
  {
    return new PDO('mysql:host=localhost;dbname=BancoMimo;charset=utf8mb4', 'root', 'admin'); //Et50@n13
  }
}
