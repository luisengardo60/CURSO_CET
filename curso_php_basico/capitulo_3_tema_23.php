<html>
<head>
<Title>Trabajando con Include</title>
</head>
<body>
<center>
<h1>Inclusión de ficheros</br></h1>
<?php
//Se incluye una cabacera HTML
include("capitulo_3_tema_23_cabecera.inc");

// el programa capitulo_3_tema_23_cuerpo.inc hace uso
//de las variables $base y $exponente
$base=2;
$exponente=-3;
include ("capitulo_3_tema_23_cuerpo.inc");
echo "<br> Primera inclusión de 'cuerpo.inc'<hr width'40%'>";
$base=7;
$exponente=5;
include ("capitulo_3_tema_23_cuerpo.inc");
echo "<br> Segunda inclusión de 'cuerpo.inc'<hr width'40%'>";

$base=9;
$exponente=7;
include ("capitulo_3_tema_23_cuerpo.inc");
echo "<br> Tercera inclusión de 'cuerpo.inc'<hr width'40%'>";
include("capitulo_3_tema_23_pie.inc");
?>

</center>
</body>
</html>