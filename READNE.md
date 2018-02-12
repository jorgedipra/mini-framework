

Proyecto plantado sobre AltoRouter, este es una clase de enrutamiento pequeña pero poderosa para PHP 5.3+, fuertemente inspirada por [klein.php](https://github.com/chriso/klein.php/).

# AltoRouter [![Build Status](https://api.travis-ci.org/dannyvankooten/AltoRouter.png)](http://travis-ci.org/dannyvankooten/AltoRouter) [![Latest Stable Version](https://poser.pugx.org/altorouter/altorouter/v/stable.svg)](https://packagist.org/packages/altorouter/altorouter) [![License](https://poser.pugx.org/altorouter/altorouter/license.svg)](https://packagist.org/packages/altorouter/altorouter) [![Code Climate](https://codeclimate.com/github/dannyvankooten/AltoRouter/badges/gpa.svg)](https://codeclimate.com/github/dannyvankooten/AltoRouter) [![Test Coverage](https://codeclimate.com/github/dannyvankooten/AltoRouter/badges/coverage.svg)](https://codeclimate.com/github/dannyvankooten/AltoRouter)

```php
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
```

## Notas

* El css se debe llamar igual a @name
* El controlador debe rener la sigiente estrutura:
	
	* Nombre de archivo: @target__controller.php (Landing__controller.php)
	* La case de tener el mismo nombre del archivo (class  Landing__Controller)
	* Por cada @name debe haber una funciones dentro de su controlador debe llamarse igual a @name (funcion home()) 
* Los nombres de los archivos view deben tener esta estructura; ```   $Classes['1']__@name.php  ```  (Landing__home.php)


## Caracteristicas

* Se puede usar con todos los métodos HTTP
* Enrutamiento dinámico con parámetros de ruta nombrados
* Enrutamiento invertido
* Enrutamiento de expresión regular flexible (inspired by [Sinatra](http://www.sinatrarb.com/))
* Expresiones regulares personalizadas

## Empezando

* Necesita PHP> = 5.3 



## License

(MIT License)

* Copyright (c) 2017 Jorge Edwin Diaz Prado <jorgedipra@gmail.com>
* Copyright (c) 2012-2015 Danny van Kooten <hi@dannyvankooten.com>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
