	<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Operador de Resolución :: </H2>
			<H3>Compartiendo el mismo nombre:</H3>


<?php
//A class constant, class property (static), and class function (static) can all
//share the same name and be accessed using the double-colon.
class A 
{
public static $B = '1'; # Static class variable.
const B = '2'; # Class constant.
public static function B() { # Static class function.
return '3';
}
}
echo A::$B . A::B . A::B(); # Outputs: 123
?> 
</CENTER>
</BODY>
</HTML>