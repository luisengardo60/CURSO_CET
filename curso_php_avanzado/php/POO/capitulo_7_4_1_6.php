	7 5
<HTML>
	<HEAD>
		<TITLE>Constructores en PHP</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Propiedades privadas</H2>
				<?PHP
        /*Ahora hay dos variables, una privada que no se puede modificar y
         es null porque no se le ha asignado ningún valor, y otra public que 
         crea PHP. Esto es algo confuso, por lo que lo mejor es evitar esta
          situación. Los métodos y propiedades privados sólo deben ser accedidos 
          por la clase en la que se encuentran, las clases hijas no pueden 
          acceder a ellos. Para ello se utiliza el modificador protected.*/
       class Perro
{
    private $nombre;
    private function ladrar(){
        print "Guau!";
    }
}
class Bulldog extends Perro {}
$cachorro = new Bulldog();
$cachorro->nombre = "BunBuns";
var_dump($cachorro);
/*
Devuelve:
object(Bulldog)[1]
  private 'nombre' (Perro) => null
  public 'nombre' => string 'BunBuns' (length=7)
*/
// Los métodos en cambio no se pueden usar:
$cachorro->ladrar(); // Fatal error: Call to private method       					
				?>
         </CENTER>
	</BODY>
</HTML>