<HTML>
<HEAD>
<TITLE>Programación orientada a objetos</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<BODY>
<CENTER>
<H2>Ámbito de las variables</H2>
<h3><em><strong>Local. Rutina que dará error, dado que la variable es local y se está tratando de accesar desde una función.</strong></em></h3>
<?php
$a=1;

function prueba()
{
//ámbito local. Dará error al no estar definida la variable
echo $a;
}
prueba();
?>
</CENTER>
</BODY>
</HTML>