 <HTML>
<HEAD>
<TITLE>Trabajando con arrays</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
 <?php
$cars = array(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br><br><br>";
?>
<?php
//barrido automático
for ($fila = 0; $fila < 4; $fila++) {
echo "<p><b>Número de fila $fila</b></p>";
echo "<ul>";
for ($colum = 0; $colum < 3; $colum++) {
echo "<li>".$cars[$fila][$colum]."</li>";
}
echo "</ul>";
}
?>
<CENTER>
</BODY>
</HTML>