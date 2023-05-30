<HTML>
	    <HEAD>
		        <TITLE>Herencia</TITLE>
		        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	    </HEAD>
	    <BODY>
		        <CENTER>
			            <H2><em><strong>Clases, y métodos abstractos</em></strong></H2>
			<H2><em><strong>Considerar: la ejecución de la creación de objeto de las heredadas no implica que se ejecute</em></strong></H2>
			 <H2><em><strong>el constructor de la clase padre. Por tanto, las heredadas deben tener su constructor, de requerir inicializar variables:</em></strong></H2>             
			  <?PHP
/*Las clases abstractas se suelen utilizar como base para crear una jerarquía en la que todas las clases comparten 
una parte de la interfaz. Dentro de una clase abstracta se pueden definir métodos abstractos. Los métodos abstractos 
no tienen implementación (ni funcionalidad), simplemente definen una parte de la interfaz que deben implementar las clases
 derivadas (la clase base obliga a que se definan esos métodos en la clase derivada).*/
abstract class Vehiculo
{
	protected $potencia;
	protected $peso;
	public $cadena=array();
	function __construct($potencia,$peso)
	{
		$this->potencia = $potencia;
		$this->peso = $peso;
		return true;
	}
	function relacionPesoPotencia()
	{
		if ($this->potencia>0)
		{
//$cadena[0]=$this->peso;
//return ($cadena[0]);
			return ($this->peso/$this->potencia);
		}
		return -1;
	}
//// devuelve el tiempo en alcanzar los 100 Km/h
//// partiendo de cero
//// cada tipo de vehiculo tendra una
//// aceleracion aproximada en funcion de sus
//// caracteristicas particulares
	abstract function aceleracionAproximada();
}
//// una Moto es un Vehiculo
class Moto extends Vehiculo
{
	function __construct($potencia,$peso)
	{
		$this->potencia = $potencia;
		$this->peso = $peso;
		return true;
	}
//// devuelve el tiempo en alcanzar los 100 Km/h
//// partiendo de cero
	function aceleracionAproximada()
	{
		$coeficienteTransmision = 3.0;
		$t = $this->peso * 771.73 / (2.0 * $this->potencia * 735);
		$t = $t * $coeficienteTransmision;
		return $t;
	}
}
//// un Coche es un Vehiculo
class Coche extends Vehiculo
{
	function __construct($potencia,$peso)
	{
		$this->potencia = $potencia;
		$this->peso = $peso;
		return true;
	}
//// devuelve el tiempo en alcanzar los 100 Km/h
//// partiendo de cero
	function aceleracionAproximada()
	{
		$coeficienteTransmision = 2.2;
		if ($this->potencia==0)
		{
			return -1;
		}
		$t = $this->peso * 771.73 / (2 * $this->potencia * 735);
		$t = $t * $coeficienteTransmision;
		$t=$t;
		return $t;
	}
}
//// un coche (125CV, 1300Kg)
echo "<font color='red'>clase padre: Vehículo.</font><br>";
$coche = new Coche (125, 1300);
echo "Clase heredada <font color='blue'>Coche</font>.<br>";
echo "Rango coche (0-100):  ".number_format($coche->aceleracionAproximada(),2 , "," , "." )."<br>";
//string number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," )
echo " Relación Peso/Potencia: ".number_format($coche->relacionPesoPotencia() ,2 , "," , "." )."<br>";
echo "<hr>";
//// una moto (60CV, 250Kg)
$moto = new Moto (60, 250);
echo "Clase heredada <font color='blue'>Moto</font>.<br>";
echo "Rango moto (0-100):  ".number_format($moto->aceleracionAproximada(),2 , "," , "." )."<br>";
echo " Relación Peso/Potencia: ".number_format($moto->relacionPesoPotencia() ,2 , "," , "." )."<br>";
?>
</CENTER>
</BODY>
</HTML>