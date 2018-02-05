<?php 
#@header
define("Titulo", "proyecto-a");
include 'partials/header_partials.php'; 
#@END::header


#@header-html
include 'partials/Landing__header_partials.php';
#@END::header
?>
<div class="container " id="gridLan">
	<section id="gridLan__card">
		<article class="card">
			<img class="card-img-top" src="../storage/web/landing/facebook_no_image.png" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">proyecto -a</h5>
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
<?php 
#@footer-html
include 'partials/Landing__footer_partials.php';
#@END::footer
#
#footer/Scripts
include 'partials/footer_partials.php'; 
#@END::footer
?>
