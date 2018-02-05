<?php
$router = new AltoRouter();

$router->setBasePath('');// rura base se deja "" si esta en la raiz
#			  @metodo	@ruta  									@target        @name		
$router->map('GET|POST','/',   									'Landing',    'home');
$router->map('GET',		'/about',   	    					'Landing',    'about');

// match current requestc
$match = $router->match();
