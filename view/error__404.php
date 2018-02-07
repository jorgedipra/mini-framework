<?php 
#@header
define("Titulo", "Jorgedipra");
include 'partials/header_partials.php'; 
#@END::header

#@header-html
include 'partials/Landing__header_partials.php';
#@END::header
?>
<div class="container text-center">
	<p>
		<h2>PÁGINA NO ENCONTRADA</h2>
	</p>
	<img src="../storage/public/404/404_1.gif" alt="404">
	<p>
		<h2>	
			Vaya, parece que esa página no existe.
		</h2>
	</p>
	<p>
		Los conejos han estado mordisqueando los cables otra vez ... <br>
		Tal vez esto ayude a casa:
	</p>
	<a href="/" title="Home">	
		<p style="width: 100px;height: 100px; border: solid 1px #ccc;border-radius: 100%; margin: 0 auto;font-size: 360%">
			<i class="fas fa-home"></i>
		</p>
	</a>
	<br>
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
