<HTML>
<HEAD>
<TITLE>Variables con vectores</TITLE>
</HEAD>
<BODY>
<CENTER>
<H2>Trabajando con vectores o <I>arrays</I></H2>
<H3>Nombre: capitulo_2_tema_3</H3>
<?PHP
$matriz1[0]="Chevrolet";
$matriz1[1]="Malibu";
$matriz1[2]="1981";
$matriz1[3]="2.500";
$matriz1[4]="v6";
$matriz1[5]=182;
$matriz1[6]="Azul";
//ahora crearemos una matriz asociativa,a través de claves
// para marcar una posición sin contenido se puede utilizar también null
$matriz2['modelo']="Ford";
$matriz2["marca"]="Mustang";
$matriz2['fecha']=null;
$matriz2["cc"]="3.000";
$matriz2['motor']="v8";
$matriz2['color']="Negro";
$matriz2['potencia']=200;


?>

<TABLE BORDER="2" CELLPADDING="4" CELLSPACING="4">
<TR ALING="Center" BGCOLOR="yellow">
<TD></TD>
<TD>Modelo</TD>
<TD>Marca</TD>
<TD>Fecha</TD>
<TD>CC</TD>
<TD>Motor</TD>
<TD>Potencia</TD>
<TD>Color</TD>
</TR>


<TR ALING="Center"> 
<TD BGCOLR="Yellow">Vector1</TD>
<?php
echo "<TD> $matriz1[0] </TD>";
echo "<TD> $matriz1[1] </TD>";
echo "<TD> $matriz1[2] </TD>";
echo "<TD> $matriz1[3] </TD>";
echo "<TD> $matriz1[4] </TD>";
echo "<TD> $matriz1[5] </TD>";
echo "<TD> $matriz1[6] </TD>";

?>

</TR>

<TR ALING="Center" >
<TD BGCOLR="Yellow">Vector2</TD>
<?php
echo "<TD>". $matriz2['modelo']."</TD>";
echo "<TD>". $matriz2['marca']. "</TD>";
echo "<TD>". $matriz2['fecha']. "</TD>";
echo "<TD>". $matriz2['cc']. "</TD>";
echo "<TD>". $matriz2['motor']. "</TD>";
echo "<TD>". $matriz2['potencia']. "</TD>";
echo "<TD>". $matriz2['color']. "</TD>";
?>

</TR>
</TABLE>
</CENTER>
</BODY>
</HTML>