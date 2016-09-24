<!DOCTYPE html>

	<?php require_once("cabecalho.inc"); ?>

	<div class="wrapper" role="main">
		<div class="container">
			<div class="row">
				<div id="conteudo" class="col-md-9">
					<div class="artigo" role="article">
						<div class="row" id="indexMiolo">

							<div class="col-md-4">
								<div class="iconspage">
									<!-- <span class=" glyphicon glyphicon-grain"></span> -->
									<h2><a href="form_cadastrarMateriaPrima.php">Cadastrar Matéria Prima</a></h2>
									<img src="img/materiaprima.jpg" alt="">
									<a href="#">Saiba mais</a>
								</div>
							</div>

							<div class="col-md-4">
								<h2><a href="exibir_materiaPrima.php">Lista de Matéria Prima</a></h2>
								<img src="img/produto.jpg" alt="">
								<a href="#">Saiba mais</a>
							</div>

							<div class="col-md-4">
								<h2><a href="#">Título do artigo</a></h2>
								<img src="http://placehold.it/350x350" alt="">
								<a href="#">Saiba mais</a>
							</div>

						</div>
						<!-- div row conteudo -->
					</div>
					<div class="artigo" role="article">
						<div class="row">
							<div class="col-md-4">
								<a href="#" title="">
									<img src="http://placehold.it/350x350" alt="">
								</a>
							</div>
							<div class="col-md-4">
								<a href="#" title="">
									<img src="http://placehold.it/350x350" alt="">
								</a>
							</div>
							<div class="col-md-4">
								<a href="#" title="">
									<img src="http://placehold.it/350x350" alt="">
								</a>
							</div>
						</div>
						<!-- div row conteudo -->
					</div>

				</div>
				<!-- div conteudo -->

				<!-- Sidebar -->
				<div id="sidebar" class="col-md-3">
					<div class="widget">
						<h3>Estátisticas</h3>
							<div class="form-group">
								<ul>
									<li> Total gasto: </li>
									<li> Lucro Total: </li>
									<li>  Lucro futuro: </li>
								</ul>
									<!-- quando vender todos os produtos -->

								<!-- <label class="sr-only" for="exampleInputEmail2">Entre com seu email</label>
								<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Entre com seu email"> -->
							</div>
							<!-- <button type="submit" class="btn btn-success">Cadastrar</button> -->
					</div>
					<div class="widget">
						<h3>Relatórios</h3>
						<ul>
							<li><a href="">Os mais vendidos</a></li>
							<li><a href="">Produtos com estoque em baixa</a></li>
							<li><a href="">Matéria prima com estoque em baixa</a></li>
							<!-- add campo limite de estoque -- comparar com o total e ve se esta no limite -->
							<li><a href="">Prodtuos aguardando venda </a></li>
							<!-- checkbox para marcar produto vendido. -->
							<li><a href="">Os mais vendido do Mês</a></li>
						</ul>
					</div>
				</div>

			</div>
			<!-- div row container -->
		</div>
		<!-- div container -->
	</div>
	<!-- div wrapper -->

<?php require_once("rodape.inc"); ?>
