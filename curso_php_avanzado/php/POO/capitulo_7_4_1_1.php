<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Propiedades  privadas. Error intencional</strong></strong></H2>
			<?PHP
			
			class Coche {
				private $velocidad=0;
				function aumentarVelocidad(){
				}
				function parar() {
					$this->velocidad = 0;
				}
			}
			$coche = new Coche();

try{
	//$coche->velocidad=1000; // PHP Fatal error
	if (!isset($coche->velocidad))
	throw new Exception("No existe Propiedad",50);
echo "exito en la  operación. Propiedad existe!!!";	
} catch(Exception $e){
echo "ERROR ".$e->getCode()."<br>en la línea ".$e->getLine().
"<br>Mensaje del error: '"    .$e->getMessage()." '<br><br>";
}
?>
</CENTER>
</BODY>
</HTML>