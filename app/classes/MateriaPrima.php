<?php
header("Content-Type: text/html; charset=utf-8",true) ;
require_once( BASE_DIR . "/classes/exibir_materiaPrimaDao.php");

class MateriaPrima
{
  use exibir_materiaPrimaDao;

  private $IdmateriaPrima;
  private $descricao;
  private $nome;
  private $custo;
  private $qtd;
  private $tipo;

  public function __construct( $idMateriaPrima, $descricao, $custo, $qtd, $tipo,$nome)
  {
    $this->idMateriaPrima = $idMateriaPrima;
    $this->descricao = $descricao;
    $this->custo = $custo;
    $this->tipo = $tipo;
    $this->nome = $nome;
    $this->qtd = $qtd;
  }

  public function getIdMateriaPrima()
  {
    return $this->idMateriaPrima;
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function getCusto()
  {
    return $this->custo;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  public function getQtd()
  {
    return $this->qtd;
  }
  public function getNome()
  {
    return $this->nome;
  }
}
