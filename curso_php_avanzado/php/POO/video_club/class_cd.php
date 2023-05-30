<?php
class Cd extends Producto
{
	private $duracion;
	private $genero;

	public function __construct($nombre,$duracion,$genero)
	{
		$this->nombre=$nombre;
		$this->precio=1;
		$this->duracion=$duracion;
		$this->genero=$genero;
	}
	public function getPrecio()
	{
		return $this->precio;
	}
	public function getDuracion()
	{
		return $this->duracion;

	}
	public function getGenero()
	{
		return $this->genero;

	}
}
?>