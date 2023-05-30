<HTML>
<HEAD>
<TITLE>Trabajando con arrays</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
<H2>Función <font color="red" face="Comic Sans MS,arial">recorrido de arrays con each y list</H2>
<font color="black" >Formato:   <font color="blue" >each($arreglo), list($posicion,$valor), list($clave,$valor)<br></H2>

<?php
$matriz1=array("cougar","ford",null,"2.500","v6",172);
$matriz2=array('modelo'=>'cougar','marca'=>'ford','fecha'=>null,'cc'=>'2500','motor'=>'v6','potencia'=>162);
$matriz3['modelo']="cougar";
$matriz3['marca']="ford";
$matriz3['fecha']=null;
$matriz3['cc']="2500";
$matriz3['motor']="V8";
$matriz3['potencia']=182;

?>



<Table border="0" cellpadding="4" cellspacing="6">
<tr align='center'><td>
<table border='1' cell padding='2' cellspacing='2'>
<tr align='center' bgcolor='yellow'>
<td>Posición</td><td>Valor</td></tr>

<?php
while (list($pos,$valor)=each($matriz1)){

echo"<tr align='center'><td>".$pos."</td>";
echo "<td>".$valor."</td></tr>";
}
?>
</table></td><td>


<table border='1' cell padding='2' cellspacing='2'>
<tr align='center' bgcolor='yellow'>
<td>Clave</td><td>Valor</td></tr>

<?php
while (list($pos,$valor)=each($matriz2)){

echo"<tr align='center'><td>".$pos."</td>";
echo "<td>".$valor."</td></tr>";
}
?>
</table></td><td> 



<table border='1' cell padding='2' cellspacing='2'>
<tr align='center' bgcolor='yellow'>
<td>Clave</td><td>Valor</td></tr>

<?php
while (list($pos,$valor)=each($matriz3)){

echo"<tr align='center'><td>".$pos."</td>";
echo "<td>".$valor."</td></tr>";
}
?>
</table></td></tr> 
</table>
<CENTER>
</BODY>
</HTML>