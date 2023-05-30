<?php
/*Clase que representa a un cliente en el dominio del problema*/
class Cliente
{
	private $nombre;
	private $productos_Alquilados;
	public function __construct($nombre)
	{
		$this->nombre=$nombre;
		$this->productos_Alquilados=array();
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function alquilarProducto($producto)
	{
		return $this->productos_Alquilados[]=$producto;
	}
}
?>
