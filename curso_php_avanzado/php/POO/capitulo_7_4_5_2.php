	<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Operador de Resolución ::</strong></em> </H2>
			<H3><em><strong>Desde el exterior de la definición de la clase</strong></em></H3>
<?php
class Myclass {
	const CONST_VALUE='Un valor constante';
}
Class OtherClass extends Myclass
{
const CONST_VALUE='Un valor constante_2';	
public static $my_static='Variable estática';
public static function doubleColon(){
echo parent::CONST_VALUE."<br>";
echo self::CONST_VALUE."<br>";
echo self::$my_static."<br>";
}
}

$classname='Myclass';
$classname2='OtherClass';
echo "Desde el exterior de la definición de clase:";
echo "<br>";
echo $classname::CONST_VALUE."  ";
echo $classname2::CONST_VALUE;
echo "<br>";
echo Myclass::CONST_VALUE;
echo "<hr>";
echo "Desde el interior de la definición de clase: <br>";
$classname='OtherClass';
$classname::doubleColon();// A partir de PHP 5.3.0
OtherClass::doubleColon();
?>
</CENTER>
</BODY>
</HTML>