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

echo "<br><br>";

foreach ($Landing_about['var5'] as $key) {
	echo ">>".$key->getID();
}
 ?>