<?php

	require_once( "./comum.php");
	require_once( BASE_DIR . "/classes/Banco.php");
	require_once( BASE_DIR . "/classes/Excluir_materiaPrimaDao.php");
	header("Content-Type: text/html; charset=utf-8",true) ;

	$id = $_POST["id"];

	$acao= new Excluir_materiaPrimaDao();
	$acao->excluir($id);
?>
