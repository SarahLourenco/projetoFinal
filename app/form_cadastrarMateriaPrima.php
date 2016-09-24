<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastrar Matéria Prima</title>
	</head>
	<body>
		<?php require_once("cabecalho.inc"); ?>
		<div class= "container">

			<form  id="cadastrar_materiaPrima">
				<h2> Cadastrando Matéira Prima</h2>

				<div id="feedbackCadastro">
					mensagem aqui
				</div>

			 <div class="form-group">
				 <label>  Nome: </label>
				 <input type="text" placeholder="Nome" name="nome" maxlength="40" class="form-control">
			 </div> <!-- /.form-group -->

			 <div class="form-group">
				 <label>Descrição:</label>
				 <textarea name="descricao" placeholder="Descrição" rows="4" cols="40" maxlength="120" class="form-control"> </textarea>
 		 	 </div> <!-- /.form-group -->

			<div class="form-group">
				<label>Quantidade:</label>
				<input type="number" name="qtd" maxlength="8" class="form-control">
			</div> <!-- /.form-group -->

			<div class="form-group">
				<label> Tipo: </label>
				<select name="tipo" class="form-control">
					<option value="unidade">Unidade</option>
					<option value="lote">Lote</option>
					<option value="lote">Metro</option> // verificar se vai vir do banco
				</select>
			</div> <!-- /.form-group -->

		<div class="form-group">
			<label>Custo:</label>
			<input type="number" name="custo" maxlength="8" class="form-control">
		</div> <!-- /.form-group -->
		<div class="form-group">
		<button class="btn btn-default btn-lg btn-block btn-cadastrar_materiaPrima" type="button">Cadastrar</button>
	</div>
	</form><!-- /.cadastrar_materiaPrima -->
</div><!-- /.container -->
<?php require_once("rodape.inc"); ?>
</body>
<script language="JavaScript" src="js/cadastrar_materiaPrima.js"></script>
</html>
