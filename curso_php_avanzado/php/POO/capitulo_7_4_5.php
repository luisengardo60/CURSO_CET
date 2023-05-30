	<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Operador de Resolución :: </strong></em></H2>
			<H3><em><strong>Desde el exterior de la definición de la clase</strong></em></H3>
<?php
class Myclass {
	const CONST_VALUE='Un valor constante';
}
$classname='Myclass';
echo $classname::CONST_VALUE;
echo "<br>";
echo Myclass::CONST_VALUE;
?>
</CENTER>
</BODY>
</HTML>