<HTML>
	<HEAD>
		<TITLE>Programación orientada a objetos</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Variables estáticas</H2>
			<h3><em><strong><p>El valor de la variable es definida al ejecutar</p><p> la función
			por primera vez y no se pierde</p></strong></em></h3>
			<?php
	
			$a=0;
function test()
{
	global $a;
	$a++;
static $count=0;
$count++;
echo $count;

}
while ($a<10)
{
	echo "<br>";
	test();
}
?>
		</CENTER>
	</BODY>
</HTML>