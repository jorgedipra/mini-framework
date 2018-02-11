<?php
$router = new AltoRouter();
//si se agrega una clase colocar estado true carcar la pagina y pasar a false
$editar=false;
// rura base se deja "" si esta en la raiz
$router->setBasePath('');
//clases que se quieran crear, por cada clase seria un conjunto de funciones diferentes
$Classes=[
			'1'=>'Landing',
			'2'=>'Savelink',
		];

#			  @metodo	@ruta  									@target        	  @name		
$router->map('GET|POST','/',   									$Classes['1'],    'home');
$router->map('GET',		'/about',   	    					$Classes['1'],    'about');

// match current requestc
$match = $router->match();