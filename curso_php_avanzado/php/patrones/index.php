<?php
include_once 'vehiculo.php';
echo "Patrones de Diseño:<br>";
echo "Factory Pattern<br><br>";
$carro = Vehiculo::create('carro', 4);
echo $carro->getType() . ": tiene " . $carro->ruedas . " ruedas" . "<br>";
$motocicleta = Carro::create('motocicleta', 2);
echo $motocicleta->getType() . ": tiene " . $motocicleta->ruedas . " ruedas" . "<br>";
$camion = Carro::create('camion', 16);
echo $camion->getType() . ": tiene " . $camion->ruedas . " ruedas" . "<br>";

echo "<br><br>Otra forma(ver el código):<br>";
$autos = array('carro'=>4,'motocicleta'=>2,'camion'=>16);
foreach($autos as $key=>$value) {
${$key} = Carro::create($key, $value);
echo ${$key}->getType() . ": tiene " . ${$key}->ruedas . " ruedas" . "<br>";
}
?>