<?php
echo "Patrones de Diseño:<br>";
echo "Strategy<br><br>";
include_once 'output.php';
include_once 'square.php';
include_once 'circle.php';
include_once 'cube.php';
echo " Patrones de Diseño:<br>";
echo " Strategy<br><br>";
$input = 10;

$output = new Output(new Square());
echo "Cuadrado:<br>";
echo $output->display($input);
echo "<br><br>";
echo "Cubo:<br>";
echo $output->setStrategy(new Cube());
echo $output->display($input);
echo "<br><br>";
echo "Círculo:<br>";
$output->setStrategy(new Circle());
$numero= $output->display($input);
$numero=number_format($numero,2,'.','');
echo $numero;
echo "<br><br>";
?>