
<HTML>
<HEAD>
<TITLE>Trabajando con arrays</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
<H2>Función <font color="red" face="Comic Sans MS,arial">Arrays escalares</H2>
<font color="black" >Formato:   <font color="blue" >$variable=(a,b,c,d...), $variable[]<br></H2>
<?php
$matriz1=array("cougar","ford",null,"2.500","v6",172);
?>

<table border="1" cellpadding="2" cellspacing="2">
<tr align="center" bgcolor="yellow">
<td>Indice</td>
<?php
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

</tr>
</table>
<CENTER>
</BODY>
</HTML>