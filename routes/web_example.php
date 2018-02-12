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
$router->map('GET',		'/about',   	    					$Classes['2'],    'about');
$router->map('GET',		'/about/[i:id]',    					$Classes['2'],    'about_id');
$router->map('GET',		'/about/[desc|asc|favoritos:ordenar]',  $Classes['2'],    'about_ordenar');
$router->map('GET',		'/about/[delete|update:action]=[i:id]', $Classes['2'],    'about_data');
$router->map('GET',		'/about/[delete|update:action]', 		$Classes['2'],    'about_acciones');
#@ruta
##ordenar->string ,acciones->llamado especial ,id=>int
#@name
##ordenar->string ,acciones->llamado especial ,id=>int, data->envia un numero de accion

// match current requestc
$match = $router->match();
?>
