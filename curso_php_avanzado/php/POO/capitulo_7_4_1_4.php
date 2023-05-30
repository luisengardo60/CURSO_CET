	<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Propiedades protected y uso en otras clases</em></strong></H2>
				<?PHP
				// Las propiedades privadas solo se pueden
				//operar en la misma clase y no en otra heredada  heredada.
				//Para ello se deben utilizar propiedades Protegigas
				//como protected				
class Coche {
protected $velocidad=0;

function setVelocidad($velocidad) {
$this->velocidad = (int) $velocidad;
echo $this->velocidad; 
}
}
Class Deportivo extends Coche{
function aumentarVelocidad() {
return $this->velocidad=$this->velocidad*2;
}
}
$deportivo = new Deportivo();
$deportivo->setVelocidad(100);
echo "<br>";
echo $deportivo->aumentarVelocidad(); // velocidad = 200	
$deportivo2= new Coche();
echo "<br>";
echo $deportivo2->setVelocidad(50);
echo "<br>";
echo $deportivo->aumentarVelocidad();
			
?>
		</CENTER>
	</BODY>
</HTML>