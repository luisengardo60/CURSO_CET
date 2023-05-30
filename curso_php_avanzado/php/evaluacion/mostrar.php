<?php
class Db{

static $instance;//The single instance
private $servidor="localhost";
private $usuario="root";
private $password="";
private $base_datos="curso_php";
private $link;
private$stmt;
private $array;

/* La fucnción construct es privada para evitar que  el objeto
pueda ser creado mediante new*/
private function __construct(){
	$this->conectar();
}
/*Evitamos el clonaje del objeto. Patrón Singleton*/
private function __clone(){}
/*función encargada de crear, si es necesario, el objeto. Esta es la función
que debemos llamar desde fuera de la clase para instanciar el objeto,
y así poder utilizar sus métodos*/
public static function getInstance(){
	if (!(self::$instance instanceof self)){
		self::$instance=new self();
	}
	return self::$instance;
}
/*realiza la conexión a la Base de Datos*/
private function conectar(){
	$this->link=mysqli_connect($this->servidor, $this->usuario, $this->password);
	mysqli_select_db($this->link, $this->base_datos);
@mysql_query("SET NAMES 'utf8'"); 
}
/*Método para una sentencia sql*/
public function ejecutar($sql){
	$this->stmt=mysqli_query($this->link,$sql);
	return $this->stmt;
}
/*Método para obtener una fila de resultados de la sentencia sql*/
public function obtener_fila($stmt,$fila){
if ($fila==0){
	$this->array=mysqli_fetch_array($stmt);
}else{
	mysqli_data_seek($stmt,$fila);
	$this->array=mysqli_fetch_array($stmt);
}
return $this->array;
}
/*Devuelve el último id del insert introducido*/
public function lastID(){
	return mysqli_insert_id($this_link);
}
}
?>