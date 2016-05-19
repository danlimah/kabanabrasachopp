<?php include 'header.php' ?>
<ol class="breadcrumb">

	<div class="container">
		<ul class="list-inline">
			<li><a href="index.php">Homepage</a></li>
			<li class="active">Contato</li>
		</ul>	  
	</div>
  
</ol>

<div class="container">
	<h1>Contato</h1>
	<hr>

	<div class="row">

		<div class="col-lg-6">
			<form>

				<div class="form-group">
					<label>Queremos saber o seu nome (:</label>
					<input type="text" class="form-control" placeholder="Digite seu nome">
				</div>

				<div class="form-group">
					<label>Qual é o seu e-mail?</label>
					<input type="email" class="form-control" placeholder="Digite seu E-mail">
				</div>	

				<div class="form-group">
					<label>O que você quer falar com a gente?</label>
					<textarea class="form-control" placeholder="Digite aqui sua mensagem" rows="5"></textarea>
				</div>				

				<div class="checkbox">
					<label>
					  <input type="checkbox" checked> Aceito receber promoções e ofertas do site.
					</label>
				</div>

				<button type="submit" class="btn btn-warning">Enviar Mensagem</button>
			</form>
		</div>

		<div class="col-lg-6">
		<h4>
			Entre em contato conosco através do formulário ao lado.
			Ou se preferir, envie um e-mail. Logo alguém de nossa equipe retornará o seu contato.
		</h4>
			<address>
			  <strong>Kabana Brasa Chopp</strong><br>
			  Av. João Batista Ortiz Monteiro, 540<br>
			  Taubaté, SP<br>
			  <abbr title="Anote nosso Telefone">Telefone:</abbr> (12) 98115-2070
			</address>

			<address>
			  <strong>E-mail</strong><br>
			  <a href="mailto:contato@kabanabrasachopp.com">contato@kabanabrasachopp.com</a>
			</address>
		</div>

	</div>
	
</div>

<?php include 'footer.php' ?>