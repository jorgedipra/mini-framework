<?php 
#@header
define("Titulo", "Jorgedipra");
include 'partials/header_partials.php'; 
#@END::header

#@header-html
include 'partials/Landing__header_partials.php';
#@END::header
?>
<div class="container text-center" id="gridLan">
	<section id="gridLan__card">
		<article class="card">
			<img class="card-img-top" src="../storage/web/landing/facebook_no_image.png" alt="Card image cap">
			<div class="card-body">
				<h1 class="card-title ">Jorgedipra</h1>
				<h4 class="card-title ">Jorge Edwin Diaz Prado</h4>
				<p class="card-text ">
					Desarrollador web en <br>Crucerum.com.
				</p>
				<div class="btn-group " data-toggle="buttons">
					<a href="https://github.com/jorgedipra" target="bank" class="btn btn-primary">
						<i class="fab fa-github fab-2x"></i> <span>Github</span>
					</a>
					<a href="https://www.linkedin.com/in/jorgedipra" target="bank" class="btn btn-primary">
						<i class="fab fa-linkedin"></i> <span>Linkedin</span>
					</a>
					<a href="skype:jorgedipra?chat" target="bank" class="btn btn-primary">
						<i class="fab fa-skype"></i> <span>Skype</span>
					</a>
				</div>
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
						<h5>Portafolio</h5>
						<p>Arquitectura & Orden</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../storage/web/landing/img2.svg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>Savelink</h5>
						<p>Estructura & detalle</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../storage/web/landing/img3.svg" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>Contactame</h5>
						<p>Organización & visión</p>
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
		<article class="container article">
			<h5>Steve Jobs</h5>
			<p>
			"La mayoría de la gente piensa que el diseño es una chapa, es una simple decoración. Para mí, nada es más importante en el futuro que el diseño. El diseño es el alma de todo lo creado por el hombre" <br>
			</p>
		</article>	
		<article id="gridLan__botonera">
			<div class="btnLan">
				<a href="Contacto" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
					Contactarme
				</a>
				<a href="Proyectos" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">
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
