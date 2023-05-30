<HTML>
<HEAD>
<TITLE>Funciones para variables</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
<H2>Comprobando el tipo de varables</H2>
<h3>capitulo_2_tema_8.php</h3>

<?php
$cadena="Hola a todos";
echo "La variable \$cadena contiene<B> ".$cadena."</B><BR><BR>";
echo (is_bool($cadena))?'es ':'no es ';
echo "booleana <BR><BR>";
//Lo mismos aplica para:  las funciones son: is_array, is_string, es objeto.


// \
?>
</CENTER>
</BODY>
</HTML>
