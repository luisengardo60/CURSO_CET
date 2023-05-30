<HTML>
<HEAD>
<TITLE>Funciones para variables</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
<H2>Comprobando el tipo de varables</H2>
<h3>capitulo_2_tema_7.php</h3>

<?php
echo "la variable no está iniciada<br>";
echo "<B>\$cadena</B> ";

echo (isset($cadena))?'está ':'no esta ';
echo "inicializada<BR><BR>";
$cadena="";
echo " efectivamente, está vacía<br>";
echo "<B>\$cadena</B> ";

echo (empty($cadena))?'está ':'no esta ';
echo "vacia<BR><BR>";

echo "la variable fue iniciada<br>";
echo "<B>\$cadena</B> ";
echo (isset($cadena))?'está ':'no esta ';
echo "inicializada<BR><BR>";
$cadena="3,1416 es el valor de PI";
echo "<B>\$cadena</B> ";
echo (empty($cadena))?'está ':'no esta ';
echo "vacia<BR><BR>";
echo "vaciamos la variable con unset<br>";
unset($cadena);
echo "<B>\$cadena</B> ";
echo (empty($cadena))?'está ':'no esta ';
echo "vacia<BR><BR>";


// \
?>
</CENTER>
</BODY>
</HTML>