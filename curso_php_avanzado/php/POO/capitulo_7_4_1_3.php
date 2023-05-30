	<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Propiedades privadas y uso en otras clases. No se pueden heredar</H2>
				<?PHP
				// Las propiedades privadas solo se pueden
				//operar en la misma clase y no en otra heredada.
				//Para ello se deben utilizar propiedades Protegigas
				//como protected
class Coche {
private $velocidad=0;
function setVelocidad($velocidad) {
echo $this->velocidad=(int) $velocidad;
}
}

Class Deportivo extends Coche{

function aumentarVelocidad() {
 echo $this->velocidad * 2;
}
}
$deportivo = new Deportivo();
$deportivo2=new Coche();
$deportivo->setVelocidad(30);
echo "<br>";
$deportivo2->setVelocidad(50);
echo "<br>";
$deportivo->aumentarVelocidad();
?>
</CENTER>
</BODY>
</HTML>
</BODY>
</HTML>