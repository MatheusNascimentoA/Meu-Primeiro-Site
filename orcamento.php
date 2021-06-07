<?php 
$pagina = 'Orçamento';
require('header.php'); ?>

<div class="container">
	<div class="row">

		<div class="col-md-12 mt-3">
			<hr class="hr-text" data-content="Orçamento">

			<form method="post" action="form-orcamento.php" >
				<div class="row">

					<div class="col-md-12 mt-3">
						<label for="nome">Nome da empresa:</label>
						<input class="form-control" type="text" name="nome" id="nome" required="required">
					</div>

					<div class="col-md-12 mt-3">
						<label for="email_para_contato">E-mail para contato:</label>
						<input class="form-control" type="text" name="email" id="email_para_contato">
					</div>

					<div class="col-md-4 mt-3">
						<label for="telefone_celular">Telefone/Celular:</label>
						<input class="form-control" type="text" name="telefone" id="telefone_celular">
					</div>

					<div class="col-md-6 mt-3">
						<label for="cidade">Cidade:</label>
						<input class="form-control" type="text" name="cidade" id="cidade">
					</div>

					<div class="col-md-2 mt-3">
						<label for="uf">Estado:</label>
						<select class="form-control" name="uf" id="uf">
							<option>AC</option>
							<option>AL</option>
							<option>AM</option>
							<option>AP</option>
							<option>BA</option>
							<option>CE</option>
							<option>DF</option>
							<option>ES</option>
							<option>GO</option>
							<option>MA</option>
							<option>MG</option>
							<option>MS</option>
							<option>MT</option>
							<option>PA</option>
							<option>PB</option>
							<option>PE</option>
							<option>PI</option>
							<option>PR</option>
							<option>RJ</option>
							<option>RN</option>
							<option>RO</option>
							<option>RR</option>
							<option>RS</option>
							<option>SC</option>
							<option>SE</option>
							<option>SP</option>
							<option>TO</option>
						</select>
					</div>


					<div class="col-md-12 mb-3 mt-3">
						<label for="sugestao">Assunto:</label>
						<textarea class="form-control" type="text" name="assunto" id="sugestao"></textarea>
					</div>

					<div class="col-md-12 mb-3 mt-3">
						<label for="sugestao">Explique seu projeto:</label>
						<textarea class="form-control" type="text" name="projeto" id="sugestao"></textarea>
					</div>


					<div class="col-md-12 mt-3 mb-3 text-center">
						<button type="submit" class="btn btn-danger">Enviar Orçamento</button>
					</div>


					<div class="col-md-8 offset-2">
						<h5 >Agradecemos sua atenção e disponibilidade, muito obrigado!</h5>
					</div>

				</form> 
			</div>
		</div>
	</div>

</div>
<?php require('footer.php'); ?>
