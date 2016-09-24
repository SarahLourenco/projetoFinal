<?php
	require_once( "./comum.php");
	require_once( BASE_DIR . "/classes/MateriaPrima.php");
	require_once( BASE_DIR . "/classes/Banco.php");

	// session_start();
	// if( !isset( $_SESSION["usuario"] ) )
	// {
	// 	Header("location: login.php");
	// }

	$descricao = $_POST["descricao"];
	$custo = $_POST["custo"];
	$qtd = $_POST["qtd"];
	$nome = $_POST["nome"];
	$tipo = $_POST["tipo"];


	$pdo = Banco::obterConexao();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	try{
		$insere = $pdo->prepare("insert into materiaPrima ( nome, descricao, qtd, custo, tipo)
		values (:nome, :descricao, :qtd, :custo, :tipo)");

		$insere->bindParam( ":nome", $nome, PDO::PARAM_STR);
		$insere->bindParam( ":descricao", $descricao, PDO::PARAM_STR);
		$insere->bindParam( ":qtd", $qtd, PDO::PARAM_INT);
		$insere->bindParam( ":custo", $custo, PDO::PARAM_STR);
		$insere->bindParam( ":tipo", $tipo, PDO::PARAM_STR);

		$resultado = $insere->execute();

		if( $resultado ) {
		//	header ("refresh:2;url=index.php");   lista de matérias primas
			//echo "Matéria prima " .$nome. " cadastrada com sucesso";
			echo "sucesso";
		}
	}catch (PDOException $e) {
		echo "".$e->getMessage();
	}

?>
