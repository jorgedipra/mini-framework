<?php 

class  Landing__Controller{

	function home($id='',$var=''){

		

		return $view = [
			'var1' => 'x1',
			'var2' => 'x2'
		];
	}##->END function home

	function about($id='',$var=''){
		if($id==true):
			echo "id [".$id."]";
			echo "var [".$var."]";
		endif;
		$cars =array();



		$array = ["a"=>1,"b"=>2,"c"=>3];
		for ($i=0; $i < 3; $i++) { 
			$cars['Volvo1'][$i]=$i;
			$cars['Volvo2'][$i]="2".$i;
			$cars['Volvo3'][$i]="3".$i;
		}

			// $cars = [	
			// 	"Volvo1"=> ["x1",21,18],
			// 	"Volvo2"=> ["x2",22,28],
			// 	"Volvo3"=> ["x3",23,38]
			// ];

		$new_Entidad = new Landing__Entidades();
		$new_Entidad->setID('hola');
		$lista[0] = $new_Entidad;


		return $view = [
			'var1' => 'x1',
			'var2' => 'x2',
			'var3' => $array,
			'var4' => $cars,
			'var5' => $lista
		];
	}##->END function about

}##->END class landing__Controller