<HTML>
	<HEAD>
		<TITLE>Programación orientada a objetos</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Ámbito de las variables</H2>
			<h3><em><strong>Se definen las variables globales, a través de arreglos</strong></em></h3>
			<?php
$a=4;
$b=2;
function Suma()
{
	$GLOBALS['a']=$GLOBALS['a']+$GLOBALS['b'];
}
Suma();
echo $a;
?>			
		</CENTER>
	</BODY>
</HTML>