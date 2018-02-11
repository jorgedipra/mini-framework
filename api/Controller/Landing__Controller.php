<?php 

class  Landing__Controller{
/////////////////////////[Conexion a BD]///////////////////////////////	
	public $Connection;
	##[__construct constructor]
	function __construct(){
		$this->Connection = new Conex;
		$this->Connection->conectar();
	}//::END->__construct

     # [getLastId  Devuelve el id autogenerado que se utilizó en la última consulta]
     # @return [int/String] [El valor de el campo AUTO_INCREMENT que fué actualizado por la consulta anterior. Devuelve #cero si no hubo una consulta previa en la conexión o si la consulta no actualiza un valor AUTO_INCREMENT.]
    function getLastId(){
    	return mysqli_insert_id($this->Connection->Conexion_ID);
    }//END->getLastId

    ##Envia la consulta a la base de datos y retorna los datos
    function Consulta($sql=''){
    	$this->Connection->consulta($sql);
		$this->Connection->leerVarios();
		$numregistros = $this->Connection->numregistros();
		return $numregistros;
    }//::END->Consulta
/////////////////////////////////////////////////////////////////////	

	

	function home($id='',$var=''){
		
		$h1='Jorgedipra';
		

		return $view = [
			'h1' => $h1,
			'var2' => 'x2'
		];
	}##->END function home

	function about($id='',$var=''){
		if($id==true):
			echo "id [".$id."]";
			echo "var [".$var."]";
		endif;

        $sql = "SELECT user FROM `usuario`";
		$numregistros = $this->Consulta($sql);

		$lista=array();
		
		if($numregistros == 0)
			return $lista;
		
		for($i = 0; $i < $numregistros ; $i++){
			$new_Entidad = new Landing__Entidades();
			$new_Entidad->Set('user',$this->Connection->ObjetoConsulta2[$i][0]);
			$lista[$i] = $new_Entidad;
		}



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

		// $new_Entidad = new Landing__Entidades();
		// $new_Entidad->setID('hola');
		// $new_Entidad->Set('Id','02');
		// $lista[0] = $new_Entidad;


		return $view = [
			'var1' => 'x1',
			'var2' => 'x2',
			'var3' => $array,
			'var4' => $cars,
			'var5' => $lista
		];
	}##->END function about

}##->END class landing__Controller