<br>

-------------<br>
var2: <?=$Landing_about['var2']?><br>
array: <?=$Landing_about['var3']['b']?><br>

about
<br>
<?php 
echo $Landing_about['var4']['Volvo1'][0];
echo $Landing_about['var4']['Volvo2'][0];
echo "---------------------<br><br>";

foreach ($Landing_about['var4'] as $key) { 
	$i=0;
	foreach ($Landing_about['var4']['Volvo1'] as $key1) {
		echo  "<<< ".$key[$i].'<br>';
		$i++;
	}
	echo "<br><br>";
}

echo "<br><br>-------[foreach]--------------<br>";

foreach ($Landing_about['var5'] as $key) {
	// echo ">>".$key->getID();
	echo ">>".$key->Get('user');
}
echo "<br>----------[clasica]-----------<br><br>";
$new_Entidad = new  Landing__Entidades();

$new_Entidad->setID('hola');
echo $new_Entidad->getID();

echo "<br>-----------[prueba2]----------<br><br>";

$new_Entidad->Name2("Set","id","Pepe"); 
$new_Entidad->Name2("Set","nombre","luis"); 
$new_Entidad->Name2("Set","apellido","diaz"); 

echo ">>".$new_Entidad->Name2("Get",'id');
echo "<br>>>".$new_Entidad->Name2("Get",'nombre');
echo "<br>>>".$new_Entidad->Name2("Get",'apellido');

 ?>