<Doctype html Public "-//w3c//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><em><strong><font color="blue">Programa del video club</font></strong></em></title>
</head>
<body>
<center>
	<?php
include('video_club.php');
//creamos un video club
$videoclub=new Videoclub('VideoMax');
//Creamos un nuevo cliente de nombre Antonio Coronado
$cliente=new Cliente('Antonio Coronado');
//Creamos una nueva película
$pelicula=new Pelicula('El señor de los Anillos','Castellano','3 horas','Fantasia');
//Registramos el cliente y el producto en el videoclub
$videoclub->addCliente($cliente);
$videoclub->addProducto($pelicula->nombre);
//El cliente alquila la película
$videoclub->alquilar($cliente,$pelicula);

$pelicula->nombre='Los intocables';
//Registramos el cliente y el producto en el videoclub

$videoclub->addProducto($pelicula->nombre);

//El cliente alquila la película
$videoclub->alquilar($cliente,$pelicula);
//obtenemos la lista de clientes registrados
$clientes=$videoclub->getClientes();
//Imprimimos la lista de clientes registrados	
echo '<p>Lista de clientes</p>';
//foreach($clientes as $cliente)
//{
	echo $cliente->getNombre().'<br>';
//}
//Obtenemos la lista de productos registrados
$productos=$videoclub->getProductos();
//echo $productos;
echo '<p>Lista de Productos:</p>';
foreach($videoclub->productos as $valor)
{
	echo $valor.'<br>';
}

?>
</center>
</body>
</html>