<?php
require_once( "./comum.php");
require_once( BASE_DIR . "/classes/MateriaPrima.php");
require_once( BASE_DIR . "/classes/Excluir_materiaPrimaDao.php");

// session_start();
// if( !isset( $_SESSION["usuario"] ) )
// {
// 	Header("location: inicio.php");
// }

$todas = MateriaPrima::findAll();

?>
<?php require_once("cabecalho.inc"); ?>

<div id="corpo">
	<div class="container">

		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Tipo</th>
					<th class="text-center">Quantidade</th>
					<th>Custo</th>
					<th class="text-center">Atualizar</th>
					<th class="text-center">Excluir</th>


				</tr>

			</thead>
			<tbody>
				<?php
				foreach( $todas as $materia) {
					?>
					<tr>
						<td data-id=" <?= $materia->getIdMateriaPrima() ?> "> <?= $materia->getIdMateriaPrima() ?></td>
						<td><?= $materia->getNome() ?></td>
						<td><?= $materia->getDescricao() ?></td>
						<td><?= $materia->getTipo() ?></td>
						<td class="text-center"><?= $materia->getQtd() ?></td>
						<td><?= $materia->getCusto() ?></td>

						<td class="text-center">
							<i class="fa fa-refresh fa-lg btn-atualizar_materiaPrima " aria-hidden="true" ></i>
						</td>

						<td class="text-center">
							<i class="fa fa-trash fa-lg btn-excluir_materiaPrima" aria-hidden="true" ></i>
						</td>

					</tr>

					<?php
				}
				?>
			</tbody>
		</table>
	</div>
	<div>
		<a href="form_cadastrarMateriaPrima.php"> Cadastrar Matéria Prima</a>
	</div>
</div>
<script language="JavaScript" src="js/cadastrar_materiaPrima.js"></script>

<?php require_once("rodape.inc"); ?>
