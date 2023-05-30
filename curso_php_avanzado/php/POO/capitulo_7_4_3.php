<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Métodos  privados</H2>
				<?PHP
				
class Coche {
    private $velocidad = 0;

    function aumentarVelocidad() {
        $this->velocidad++;
    }

    function parar() {
        $this->velocidad = 0;
    }

}
$coche = new Coche();
$coche->velocidad = 1000; // PHP Fatal error
				?>
		</CENTER>
	</BODY>
</HTML>