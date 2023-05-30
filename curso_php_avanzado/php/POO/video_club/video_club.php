<?php
include("class_producto.php");
include("class_cliente.php");
include("class_cd.php");
include("class_juego.php");
include("class_pelicula.php");

class Videoclub
{
	private $nombre;
	public $productos;
	private $clientes;

	public function __construct($nombre)
	{
		$this->nombre=$nombre;
		$this->productos=array();
		$this->clientes=array();
	}
	public function addProducto($producto)
	{
		$this->productos[]=$producto;
	}
	public function addCliente($cliente){
		$this->clientes=$cliente;
	}
	public function getClientes()
	{
		return $this->clientes;
	}
	public function alquilar ($cliente,$producto){
		return $cliente->alquilarProducto($producto);
	}
	public function getProductos()
	{
		return $this->productos;
	}
	
}
?>