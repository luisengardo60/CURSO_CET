<HTML>
	<HEAD>
		<TITLE>Visibilidad</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Propiedades Privadas</H2>
				<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Métodos __set y __get</H2>
				<?PHP
				// se introduce un error intencional en una variable
				// En el arvhivo 7_4_2_1 se encuantra una forma
				//útil de depurar
					class Despiste{
						public $identif_muy_largo;
					}	
					$obj= new Despiste;
					$obj->identify_muy_largo='hola cursp PHP avanzado...'; //aquí está el error intencional
					echo $obj->identif_muuy_largo;// otro error. No existe la propiedad

				?>
		</CENTER>
	</BODY>
</HTML>
		</CENTER>
	</BODY>
</HTML>
