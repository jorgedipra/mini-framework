<?php

class Conexion {

 /* variables de conexion */
 var $BaseDatos;
 var $Servidor;
 var $Usuario;
 var $Clave;
 var $ObjetoConsulta;
 var $ObjetoConsulta2;

 /* identificador de conexion y consulta */
 var $Conexion_ID = 0;
 var $Consulta_ID = 0;

 /* numero de error y texto error */
 var $Errno = 0;
 var $Error = "";

 /*Conexion a la base de datos*/
 function conectar(){

    //datos de coneccion
   include("config/conexion.php"); 

    // Conectamos al servidor
   $this->Conexion_ID = mysqli_connect($this->Servidor, $this->Usuario, $this->Clave,$this->BaseDatos);

   //condicional de fallo de conexion
   if (!$this->Conexion_ID) {
    $this->Error = "Ha fallado la conexion.";
    echo $this->Error;
    printf ("Error: %s\n", mysqli_error($enlace));
    return 0;
  }

  //seleccionamos la base de datos
  if (!mysqli_select_db($this->Conexion_ID,$this->BaseDatos)){
    $this->Error = "Imposible abrir ".$this->BaseDatos ;
    return 0;
  }else{
        // echo ":D";
  }
  return $this->Conexion_ID;
} 

}
//consulta OOP
class Conex extends Conexion{   
	
	/**
 * [consulta funcion donde ejecutaremos el script y esta  Realiza una consulta a la base de datos]
 * @param  string $sql [script sql]
 * @return [bd]      [Retorna FALSE en caso de error. Si una consulta del tipo SELECT, SHOW, DESCRIBE o EXPLAIN es exitosa, mysqli_query() retornará un objeto mysqli_result. Para otras consultas exitosas de mysqli_query() retornará TRUE.]
 */
	function consulta($sql = ""){
    //condicional de consulta vacia
		if ($sql == "") {
			$this->Error = "No ha especificado una consulta SQL";
      return 0;
    }
		//ejecutamos la consulta
    $this->Consulta_ID =  mysqli_query($this->Conexion_ID,$sql);


    //condicional de consulta erronea
    if (!$this->Consulta_ID) {
            // $this->Errno = mysql_errno();
            // $this->Error = mysql_error();
            // print_r($this->Errno);
            // print_r($this->Error);

     if (mysqli_connect_errno()) {
      printf("Conexión fallida: %s\n", mysqli_connect_error());
      exit();
    }
  }

  return $this->Consulta_ID;
}

/**
 * [consultar funcion donde ejecutaremos el script y esta  Realiza una consulta a la base de datos]
 * @param  string $sql [script sql]
 * @return [bd]      [Retorna FALSE en caso de error. Si una consulta del tipo SELECT, SHOW, DESCRIBE o EXPLAIN es exitosa, mysqli_query() retornará un objeto mysqli_result. Para otras consultas exitosas de mysqli_query() retornará TRUE.]
 */
function consultar($sql = ""){
  //condicional de consulta vacia
  if ($sql == "") {
    $this->Error = "No ha especificado una consulta SQL";
    return 0;
  }
  //ejecutamos la consulta   
  $this->Consulta_ID = mysqli_query($this->conectar(),$sql);

  //condicional de consulta erronea
  if (!$this->Consulta_ID) {
            // $this->Errno = mysql_errno();
            // $this->Error = mysql_error();
            // print_r($this->Errno);
            // print_r($this->Error);
   if (mysqli_connect_errno()) {
        // printf("Conexión fallida: %s\n", mysqli_connect_error());
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
  }
}
return $this->Consulta_ID;
}

/**
 * [leerVarios Obtener una fila de resultados como un array enumerado]
 * @param  [int]  $j [contador]
 * @return [array] [devuelve un array de cadenas que se corresponde con la fila obtenida o NULL si no hay más filas en el conjunto de resultados.]
 */
function leerVarios() {
  $j=0;
  while ($this->ObjetoConsulta2[$j] = @mysqli_fetch_row($this->Consulta_ID)){
   $j++;
 }
}
/**
 * [numcampos Obtiene el número de campos de un resultado]
 * @return [int] [El número de campos de un resultset.]
 */
function numcampos() {
  return mysqli_num_fields($this->Consulta_ID);
}
/**
 * [numregistros Obtiene el número de filas de un resultado]
 * @return [int] [Retorna el número de filas del resultado.]
 */
function numregistros(){
  return @mysqli_num_rows($this->Consulta_ID);
}

/**
 * [nombrecampo  Retorna el próximo campo del resultset]
 * @param  [obj] $numcampo [Retorna la definición de una columna del resultset como un objeto]
 * @return [boolean]           [Retorna un objeto que contiene la información de la columna o FALSE en el caso de que la información no esté disponible.]
 */
function nombrecampo($numcampo) {
  return mysqli_fetch_field($this->Consulta_ID, $numcampo);
}
}
?>