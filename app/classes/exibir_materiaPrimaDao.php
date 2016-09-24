<?php
header("Content-Type: text/html; charset=utf-8",true) ;
require_once( BASE_DIR . "/classes/Banco.php");

trait exibir_materiaPrimaDao
{
  public static function rowMapper($idMateriaPrima, $descricao, $custo, $qtd,$tipo, $nome)
  {
    return new MateriaPrima($idMateriaPrima, $descricao, $custo, $qtd,$tipo, $nome);
  }

  public static function findAll()
  {
      $pdo = Banco::obterConexao();
      $statement = $pdo->prepare("SELECT idMateriaPrima,descricao,custo,qtd,tipo,nome FROM materiaPrima");
      $statement->execute();
  
      return $statement->fetchAll( PDO::FETCH_FUNC, "exibir_materiaPrimaDao::rowMapper" );
  }
}
