<?php
abstract class Producto
{
	public $nombre;
	protected $precio;

	public function getNombre(){
		return $this->nombre;
	}
	abstract public function getPrecio();
}
?>