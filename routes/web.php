<?php
$router = new AltoRouter();

$router->setBasePath('');// rura base se deja "" si esta en la raiz
#			  @metodo	@ruta	@variable	   @nombre		
$router->map('GET|POST','/', 'landing#index', 'landing');
$router->map('GET','/users/', array('c' => 'UserController', 'a' => 'ListAction'),'users');


// match current request
$match = $router->match();
?>
