<?php
class Pelicula extends Producto
{
	private $idioma;
	private $duracion;
	private $genero;

	public function __construct($nombre,$idioma,$duracion,$genero)
	{
		$this->nombre=$nombre;
		$this->precio=2;
		$this->idioma=$idioma;
		$this->duracion=$duracion;
		$this->genero=$genero;
	}
	public function getPrecio()
	{
		return $this->precio;
	}
	public function getIdioma()
	{
		return $this->idioma;
	}
	public function getDuracion()
	{
		return $this->duracion;
	}
}
?>