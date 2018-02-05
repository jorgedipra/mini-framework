<?php 
#@header
define("Titulo", "Jorgedipra");
include 'partials/header_partials.php'; 
#@END::header
?>
<header id="header" class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">
			<img src="../storage/web/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
			Jorgedipra
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Habilidades</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="#">Portafolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="#">Estudios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="#">Contactame</a>
				</li>
			</ul>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
		</div>
	</nav>
</header>

<!--  -->
<div class="container " id="gridLan">
	<section id="gridLan__card">
		<article class="card">
			<img class="card-img-top" src="../storage/web/landing/templatemo_image_02.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Jorge Diaz</h5>
				<p class="card-text">Frontend y back-end (Diseñador de páginas web y programador).</p>

				<a href="#" class="btn btn-primary">Button</a>
				<a href="#" class="btn btn-primary">Button</a>
				<a href="#" class="btn btn-primary">Button</a>
			</div>
		</article>
	</section>
	<section class="carrusel" id="gridLan__carrusel">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="../storage/web/landing/img1.svg" alt="First slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>...</h5>
						<p>...</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../storage/web/landing/img2.svg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>...</h5>
						<p>...</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../storage/web/landing/img3.svg" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>...</h5>
						<p>...</p>
					</div>
				</div>
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
		<article id="gridLan__botonera">
			<div class="btnLan">
				<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
					Contactarme
				</a>
				<a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">
					Mis Proyectos
				</a>
			</div>
		</article>	

	</section>
</div>	
<!--  -->
<footer class="border">
</footer>
<?php 
#footer/Scripts
include 'partials/footer_partials.php'; 
#@END::footer
?>
