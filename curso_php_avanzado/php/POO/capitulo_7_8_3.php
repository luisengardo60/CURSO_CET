<HTML>
	<HEAD>
		<TITLE>Herencia</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Propiedades y Métodos Final</H2>
			<?PHP
/*La palabra final se utiliza para declarar que un método o 
clase no puede ser sobreescrito por una clase hija:
Una clase final no puede ser heredada*/

class Perro
{
	public $nombre;
	final public function ladrar(){
		print "Guau!";
	}
}
class Bulldog extends Perro {
// Dará error:
	public function ladrar()
	{
		print "Woof!";
	}
}
$cachorro = new Bulldog();
$cachorro->ladrar(); // no puede redefinir un método final    
?>
</CENTER>
</BODY>
</HTML>