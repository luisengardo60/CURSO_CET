<HTML>
<HEAD>
<TITLE>Variables variables</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
<H2>Variables de variables</H2>
<H3>Nombre: capitulo_2_tma_5.php</H3>
<?php
$a = 'estudiantes';
$$a = 'como va el curso de Fundamentos PHP';
echo "La operación echo <B>\$a \$\$a:</B><BR>";
echo "$a ${$a}<BR><BR>";
echo "produce el mismo resultado que echo <B>\$a \$estudiantes:</B><BR>";
echo "$a $estudiantes";

?>
</CENTER>
</BODY>
</HTML>