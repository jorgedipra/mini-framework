<?php
$router = new AltoRouter();

$router->setBasePath('');// rura base se deja "" si esta en la raiz
#			  @metodo	@ruta  									@target        @name		
$router->map('GET|POST','/',   									'Landing',    'home');
$router->map('GET',		'/about',   	    					'Landing',    'about');
$router->map('GET',		'/about/[i:id]',    					'Landing',    'about_id');
$router->map('GET',		'/about/[desc|asc|favoritos:ordenar]',  'Landing',    'about_ordenar');
$router->map('GET',		'/about/[delete|update:action]=[i:id]', 'Landing',    'about_data');
$router->map('GET',		'/about/[delete|update:action]', 		'Landing',    'about_acciones');
#@ruta
##ordenar->string ,acciones->llamado especial ,id=>int
#@name
##ordenar->string ,acciones->llamado especial ,id=>int, data->envia un numero de accion

// match current requestc
$match = $router->match();
?>
