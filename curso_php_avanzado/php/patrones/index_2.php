<?php
echo "Patrones de Diseño:<br>";
echo "Singleton<br><br>";
include 'conexion.php';

echo " Patrón de Diseño:<br>";
echo "Singleton Pattern<br><br>";

$object = Connection::getInstance();
$object2 = Connection::getInstance();
$object3 = Connection::getInstance();
$object4 = Connection::getInstance();
?>