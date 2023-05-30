<?php
include("mostrar.php");
$bd=Db::getInstance();
$sql='select sondas.fecha,sondas.down,sondas.up,sondas.rtt,sondas.jitter,sondas.perdidas,sondas.sitio,region.region, region.supervisor from region inner join sondas on region.region=sondas.region order by fecha,region.region,sondas.sitio asc';
$atm=$bd->ejecutar($sql);
echo "<h2><em><strong>Reporte de sondas Internet:</strong></em></h2>";
echo "<TABLE BORDER='1' width=50% align=center>";
echo "<TR bgcolor='yellow'><TD>Fecha</TD><TD>Vel. Down</TD><TD>Vel.Up</TD><td>RTT</TD><td>Jitter</TD><td>Pérdidas</td><td>Estado</td><td>Región</td><td>Supervisor</td></TR>";

while ($x=$bd->obtener_fila($atm,0)){
	//echo "<TR><TD>".$x['fecha']."</TD><td>".$x['supervisor']."</td></TR>";
	echo "<TR><TD>".$x['fecha']."</TD><TD>".$x['down']."</TD><TD>".$x['down']."</TD><td>".$x['rtt']."</TD><td>".$x['jitter']."</TD><td>".$x['perdidas']."</td><td>".$x['sitio']."</td><td>".$x['region']."</td><td>".$x['supervisor']."</td></TR>";
}
echo "</table>"

?>