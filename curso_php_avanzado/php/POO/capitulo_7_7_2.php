<HTML>
	<HEAD>
		<TITLE>Atributos y Métodos de Clases</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Miembros estáticos y privados</strong></em></H2>
			<?PHP
//Los atributos y métodos de clase, tabíen llamados estáticoss
//son aquellos que pueden ejecutarse directamente desde la clase
//sin necesidad de crear un objeto.
//Dado que se usan desde la propia clases, no se utiliza la palabra reservada
//this
			class cuenta_objetos{
				static private $contador=0;
				static function cuantosobjetos(){
					return cuenta_objetos::$contador;
				}
				function __construct(){
					cuenta_objetos::$contador++;
				}
				function __destruct(){
					cuenta_objetos::$contador--;
				}
			}
			$obj1=new cuenta_objetos;
			$obj2=new cuenta_objetos;
			$obj3=new cuenta_objetos;
			echo "Objetos 'vivos':".cuenta_objetos::cuantosobjetos()."<br>";
			unset($obj2);
			echo "Objetos 'vivos':".cuenta_objetos::cuantosobjetos()."<br>";
			?>
		</CENTER>
	</BODY>
</HTML>