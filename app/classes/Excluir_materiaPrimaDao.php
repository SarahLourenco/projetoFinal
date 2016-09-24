<?php

	require_once( "./comum.php");
	require_once( BASE_DIR . "/classes/Banco.php");
	header("Content-Type: text/html; charset=utf-8",true) ;

	/* $id = $_POST["id"];
	 $descricao = $_POST["descricao"];*/
	class Excluir_materiaPrimaDao {
		private $id;

		public function excluir($id){
			$pdo = Banco::obterConexao();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			try{
				$stmt = $pdo->prepare("delete from materiaPrima where idMateriaPrima = :id");
				$stmt->bindParam( ":id", $id, PDO::PARAM_INT);
				$stmt->execute();
				$count = $stmt->rowCount();
				print_r($count);
			} catch(Exception $e) {
					echo 'Exceção capturada: ',  $e->getMessage(), "\n";
			 }
		 }
	}
?>
