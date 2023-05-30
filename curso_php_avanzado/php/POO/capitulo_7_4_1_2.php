	<HTML>
		<HEAD>
			<TITLE>Acceso a los miembros de un objeto</TITLE>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		</HEAD>
		<BODY>
			<CENTER>
				<H2><em><strong>Métodos  setter y getter</em></strong></H2>
				<H2><em><strong><p>Cuando las propiedades son privadas
				se les accesa en </p><p>la misma clase y objeto a 
				través de métodos creados de set y get</p></em></strong></H2>
				<?PHP
				//Cuando las propiedades son privadas
				//se les accesa en la misma clase y objeto a 
				//través de métodos creados de set y get
				class Coche {
					private $velocidad=0;
					function setVelocidad($velocidad) {
	// Aquí se podrían implementar otras condiciones como $velocidad > 0, etc ..
						$this->velocidad = (int) $velocidad;
					}

					function getVelocidad() {
						return $this->velocidad;
					}

				}
				$coche = new Coche();
				$coche->setVelocidad(1000);
	$velocidad=$coche->getVelocidad(); // 1000
	echo $velocidad; //Esta variable es otra en el objeto


	?>
</CENTER>
</BODY>
</HTML>