<?php 

##Kernel
$nombre_archivo = "api/Kernel.php"; 

if($editar==true){
file_exists($nombre_archivo);
   $mensaje  = <<<'EOT'
<?php
$_id=false;#para data o id
$_var=false;#especificar
$cont=0;#variable de switch

if($match['target']):
require 'Conexion/conexion.php';##Conexion a base de datos	
require "Entidad/Entidades.php";##entidades get/set
require "Controller/{$match['target']}__Controller.php";##carga Controller
do {
	switch ($match['target']):

EOT;
$temp="";
$a="";
foreach ($Classes as $ruta):
$a = <<<END
      	case '$ruta':
      		\$Controller = new  {$ruta}__Controller();
      		\${"{\$match['target']}_{\$match['name']}"} = \$Controller->{\$match['name']}(\$_id,\$_var);
		    \$cont=2;#termina el ciclo
		break;

END;
$temp .= $a;
endforeach;

$mensaje = $mensaje.$temp.<<<'EOT'
		default:
			$id=explode("_", $match['name']);
			$match['name']=$id[0];
			$_id=$id[1];#le da id [ordenar,acciones,id]

			##asiganacion de parametros dentro de una pagina
			if(isset($match['params']['id'])):
				$_var=$match['params']['id'];
			elseif(isset($match['params']['ordenar'])):	
				$_var=$match['params']['ordenar'];
			endif;
			if(isset($match['params']['action'])):	
				if(isset($match['params']['id'])):
					$_id=$match['params']['action'];
				else:
					$_var=$match['params']['action'];
				endif;
			endif;
	endswitch;
}while ($cont<1); 
else:
	$match['target']="error";
	$match['name']="404";
endif;
##Carga el html del codigo
require  "view/{$match['target']}__{$match['name']}.php";
EOT;

   if($archivo = fopen($nombre_archivo, "w")){
        if(fwrite($archivo, $mensaje)){
            echo "Se ha ejecutado correctamente";
        }else{
            echo "Ha habido un problema al crear el archivo";
        }
        fclose($archivo);
    }
}