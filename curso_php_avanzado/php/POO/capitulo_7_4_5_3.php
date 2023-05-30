	<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Operador de Resolución ::</em></strong> </H2>
			<H3><em><strong>Invocando a un método parent  que está protected</em></strong></H3>
<?php
class Myclass
{
protected function myfunc(){
echo "Myclass::myfunc.<br>";
}
}
class OtherClass extends Myclass
{
// Sobrescritura de definición parent
public function myFunc()
{
// Pero todavía se puede llamar a la función parent
	
parent::myFunc();

}
}
$class=new OtherClass();
$class->myFunc();

?>
</CENTER>
</BODY>
</HTML>