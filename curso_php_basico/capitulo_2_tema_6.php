<HTML>
<HEAD>
<TITLE>Funciones para variables</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></meta>
</HEAD>
<BODY>
<CENTER>
<H2> Conversión y visualización de variables usando  gettype() y settype()</H2>
<h3>Nombre: Capitulo_2_tema_6.php</h2>

<?php
$cadena="3.1416 es el valor de PI";
echo "el valor de \$cadena es:<B>$cadena</B><BR>";
echo "Es de tipo ".gettype($cadena)."<BR><BR>";
settype($cadena,"double");
echo "Si lo paso a doble obtengo: $cadena <BR>";
settype($cadena,"integer");
echo "Si lo paso a entero obtengo: $cadena <BR>";

?>
</CENTER>
</BODY>
</HTML>