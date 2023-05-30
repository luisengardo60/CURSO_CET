<?php
include("mostrar.php");
$bd=Db::getInstance();
$sql='select * from nomina_2';
$atm=$bd->ejecutar($sql);
echo "<TABLE BORDER='1' width=50% align=center>";
while ($x=$bd->obtener_fila($atm,0)){
	echo "<TR><TD>".$x['gerencia']."</TD><TD>".$x['nombre']."</TD><td>".$x['supervisor']."</td><td>".$x['sexo']."</td><td>".$x['nacimiento']."</td><td>".$x['antiguedad']."</td></TR>";
}
echo "</table>"

?>