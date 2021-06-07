<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/half-slider.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/carrosel.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css?id=1591642947" />
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/animations.css">
	<link rel="stylesheet" type="text/css" href="css/galery.css">
	<title><?php echo $pagina; ?> Isosert</title>

</head>

<body>

	<div class="fix">

		<div class="col-md-3 float">
			<nav class="navbar navbar-light bg-light text-center">
				<a class="navbar-brand" href="index.php">
					<img src="img/logo_transparent.png" height="120px" alt="">
				</a>
			</nav>
		</div>



		<div class="col-md-9 float">

			<nav class="navbar navbar-toggleable-md navbar-light bg-dark">

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar10" aria-expanded="false">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse show" id="#navbar10">

					<ul class="navbar-nav nav-fill w-100 h-100 ml-auto justify-content-center align-items-center">

						<li class="nav-item">
							<a class="nav-link <?php if ($pagina == 'Home') {
													echo 'active';
												} ?>" href="index.php">HOME</a>
						</li>

						<li class="nav-item">
							<a class="nav-link <?php if ($pagina == 'Empresa') {
													echo 'active';
												} ?>" href="empresa.php">EMPRESA</a>
						</li>

						<li class="nav-item">
							<a class="nav-link <?php if ($pagina == 'Serviços') {
													echo 'active';
												} ?>" href="servicos.php">SERVIÇOS</a>
						</li>

						<li class="nav-item">
							<a class="nav-link <?php if ($pagina == 'Orçamento') {
													echo 'active';
												} ?>" href="orcamento.php">ORÇAMENTO</a>
						</li>

						<li class="nav-item" style="padding-right: 9">
							<a class="nav-link <?php if ($pagina == 'Contato') {
													echo 'active';
												} ?>" href="contato.php">CONTATO</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class='active'></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">

			<div class="carousel-item active" style="background-image: url('img/tubulação1.jpg')"></div>

			<div class="carousel-item" style="background-image: url('img/tubulação2.jpg')"></div>

			<div class="carousel-item" style="background-image: url('img/tubulação3.jpg')"></div>

		</div>

		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</body>