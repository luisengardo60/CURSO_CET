<html>
<head>
<Title>Estructuras de Control</title>
</head>
<body>
<center>
<h2>Inclusión de ficheros <br><br></>
<?php
$numero=7;
$texto="<big>".$numero."</big><u>";
$primo=include("capitulo_3_tema_26_return.inc");
if(!$primo) $texto .="  no ";
$texto.= "  es primo</u><br>";
echo $texto;

$numero=15;
$texto="<big>".$numero."</big><u>";
$primo=include("capitulo_3_tema_26_return.inc");
if(!$primo) $texto .="  no ";
$texto.= "es primo</u><br>";
echo $texto;

$numero=21;
$texto="<big>".$numero."</big><u>";
$primo=include("capitulo_3_tema_26_return.inc");
if(!$primo) $texto .="  no ";
$texto.= "  es primo</u><br>";
echo $texto;
?>
</center>
</body>
</html>