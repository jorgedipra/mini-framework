<?php 
require 'vendor/AltoRouter/AltoRouter.php';
$router = new AltoRouter();
$router->setBasePath('/jorgedipra');
$router->map( 'GET', '/', "datos",'nombre' );

$match = $router->match();

echo var_dump($router->match());

if(!$router->match()) 
{
    echo 'oops';
}
echo ">>".$match['target'];
 ?>

 <pre>
	Target: <?php var_dump($match['target']); ?>
	Params: <?php var_dump($match['params']); ?>
	Name: 	<?php var_dump($match['name']); ?>
</pre>