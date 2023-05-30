<HTML>
<HEAD>
<TITLE>Trabajando con arrays</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
<H2>Función <font color="red" face="Comic Sans MS,arial">Arrays simple y con constructor</H2>
<font color="black" >Formato:   <font color="blue" >$variable=(a,b,c,d...), $variable[]<br></H2>
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

<table border="1" cellpadding="2" cellspacing="2">
<tr align="center" bgcolor="yellow">
<td>Indice</td>
<?php
echo "<font color='blue'>array simple<br>";
echo "<font color='black'>";
for ($i=0;$i<=count($matriz1)-1;$i++){
echo "<td>$i</td>";
}
?>
</tr>
<tr align="center">

<td bgcolor="yellow">$matriz
</td>
<?php
for ($i=0;$i<=5;$i++){
echo "<td>$matriz1[$i]</td>";
}


?>

<table border="1" cellpadding="2" cellspacing="2">
<tr align="center" bgcolor="yellow">
<td>Indice</td>
<?php

echo "<br><br><font color='blue'>array con constructor y asociativo<br>";
echo "<font color='black'>";
for ($i=0;$i<=count($matriz2)-1;$i++){
$ver=each($matriz2);
echo "<td>$ver[key]</td>";

}
?>
</tr>
<tr align="center">

<td bgcolor="yellow">$matriz2
</td>
<?php
reset($matriz2);
for ($i=0;$i<=count($matriz2)-1;$i++){
$ver=each($matriz2);
echo "<td>$ver[value]</td>";
}
?>
</tr>
<tr align="center">

<td bgcolor="yellow">$matriz2
</td>

<?php
for ($i=0;$i<=count($matriz2)-1;$i++){
$ver=each($matriz3);
echo "<td>$ver[value]</td>";
}


?>

</tr>
</tr>
</table>
<CENTER>
</BODY>
</HTML>