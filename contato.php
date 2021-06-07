<?php
$pagina = 'Contato';
require('header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<hr class="hr-text" data-content="Contato">
		</div>


		<div class="col-md-12">
			<form method="post" action="form-contato.php">
				<div class="row">
					<div class="col-md-12 mt-3">
						<label for="nome">Nome:</label>
						<input class="form-control" type="text" name="nome" id="nome" required="required">
					</div>

					<div class="col-md-12 mt-3">
						<label for="email_para_contato">E-mail:</label>
						<input class="form-control" type="text" name="email" id="email_para_contato">
					</div>

					<div class="col-md-4 mt-3">
						<label for="telefone_celular">Telefone:</label>
						<input class="form-control" type="text" name="telefone" id="telefone_celular">
					</div>

					<div class="col-md-3 mt-3">
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

					<div class="col-md-3 mt-3">
						<label for="assunto">Assunto:</label>
						<input class="form-control" type="text" name="assunto" id="assunto">
					</div>

					<div class="col-md-12 mb-3 mt-3">
						<label for="sugestao">Mensagem:</label>
						<textarea class="form-control" type="text" name="sugestao" id="sugestao"></textarea>
					</div>


					<div class="col-md-12 mt-3 mb-5 text-center">

						<button type="submit" class="btn btn-danger">Enviar Contato</button>

					</div>
				</div>
		</div>
		</form>
	</div>
</div>
</div>

<div class="container-fluid" style="background-image: url(img/bg-banner.jpg); background-size: cover;">
	<div class="row p-5">

		<div class="col-md-4 align-items-center text-danger text-center">
			<i class="fa fa-map-marker fa-2x" aria-hidden="true"></i><br>
			<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> CEP: 000.000.000</h1>
		</div>

		<div class="col-md-4 align-items-center text-danger text-center">
			<i class="fa fa-phone fa-2x" aria-hidden="true"></i><br>
			<h1>(00) 0 0000-0000 <br> (00) 0 0000-0000</h1>
		</div>

		<div class="col-md-4 align-items-center text-danger text-center">
			<i class="fa fa-envelope fa-2x" aria-hidden="true"></i><br>
			<h1>teste.email@teste.com</h1>
		</div>


	</div>
</div>

<div class="p-2">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29770.984170062125!2d-47.991589429824316!3d-21.13754843935603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b99930705867d3%3A0xf25b7fe5a7f157b7!2sPra%C3%A7a%2021%20de%20Abril!5e0!3m2!1spt-BR!2sbr!4v1623082702048!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>

<?php require('footer.php'); ?>