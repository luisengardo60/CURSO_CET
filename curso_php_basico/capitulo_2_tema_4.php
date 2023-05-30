<HTML>
<HEAD>
<TITLE>Casting de tipos</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
<H2>Conversión por Casting</H2>
<H3>Nombre: capitulo_2_tema_4.php</H3>

<?php
$cadena="3.1p16 es el valor de Pi";
echo "El valor de \$cadna es: <B> $cadena </B><BR><BR>" ;
$aux=(integer)$cadena;
echo "El resultado de convertirla en entero es: $aux <BR>";

$aux=(Double)$cadena;
echo "El resultado de convertirla en doble es: $aux <BR>";


?>
</CENTER>
</BODY>
</HTML>