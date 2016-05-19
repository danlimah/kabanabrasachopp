<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Kabana Brasa Chopp</title>

	<!-- Css do Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Css do Bootswatch -->
	<link href="bootswatch/flatly.css" rel="stylesheet">

	<!-- Css para Awesome Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<!-- Style compilado do Sass -->
	<link href="sass/site.css" rel="stylesheet">

	<!-- Style do Animate -->
	<link href="animate/animate.css" rel="stylesheet">

	<!-- Style padrão do site -->
	<link href="style.css" rel="stylesheet">

	<!-- jQuery necessário para o Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body class="body">

<header class="header">
	<a href="index.php" title="Logotipo">
		<img src="img/logo_site.png" alt="Logotipo">
	</a>
</header>
<div class="borda_ondas"></div>


<nav class="navbar navbar-inverse">
	<div class="container">
		<!-- Brand e Ícone Mobile -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" 
						data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="white_menu"><b>Navegar</b></span>
			</button>
		</div>

		<!-- Menu Responsivo + Menu Desktop -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Início</a></li>
				<li><a href="page-eventos.php">Agenda</a></li>
				<li><a href="page-contato.php">Reservas</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="page-contato.php">Promoções</a></li>
				<li><a href="page-contato.php">Galeria</a></li>
				<li><a href="page-contato.php">Contato</a></li>
			</ul>

		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>