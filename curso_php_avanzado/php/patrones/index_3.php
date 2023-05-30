<?php
echo "Patrones de Diseño:<br>";
echo "Adapter<br><br>";
include_once('soporte.php');
$username="Curso avanzado PHP";
$support = new Support($username);
echo "adaptación_1. Ejecuta un método: <br>";
$support->sendMessage('Problema', 'No funciona algo', '333333');
echo "<br>";
echo "<br>";
echo "adaptación_2. Ejecuta otro método: <br>";
$support->sendMessage('Problema', 'No funciona algo', '');
?>