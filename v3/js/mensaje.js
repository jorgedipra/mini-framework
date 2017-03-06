jQuery(document).ready(function($) {
	var fase = [
	'Una computadora es para mí la herramienta más sorprendente que hayamos ideado. Es el equivalente a una bicicleta para nuestras mentes',
	'Desde el punto de vista de un programador, el usuario no es más que un periférico que teclea cuando se le envía una petición de lectura',
	'Lo realmente necesario es saberlo los cambios en la información. Nadie quiere que le recuerden 16 horas al día que tiene sus zapatos puestos',
	'Ley de Alzheimer de la programación: si lees un código que escribiste hace más de dos semanas es como si lo vieras por primera vez.',
	'La televisión no es la vida diaria. En la vida cotidiana, la gente de verdad tiene que salir del café, de la película, para irse a trabajar.'
	];
	var Titulo = [
	'Steve Jobs',
	'P. Williams',
	'David Hubel',
	'Dan Hurvitz',
	'Bill Gates'
	];	
	$aletorio=numeroAleatorio(0, 4);

	$("#Frasefr").html('"'+fase[$aletorio]+'"');
	$("#Titlefr").html(Titulo[$aletorio]);

});

function numeroAleatorio(min, max) {
	return Math.round(Math.random() * (max - min) + min);
}