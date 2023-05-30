<HTML>
	<HEAD>
		<TITLE>Programación orientada a objetos</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Clases y Objetos</H2>
			<h3>Declaración de una clase y creación de un objero</h2>
				<?PHP
				class mi_Primera_Clase
				{
					public $mi_primera_propiedad;
					function __construct()
					{
						$this->mi_primera_propiedad='Saludos cordiales, trabajadores de cantv.';
					}
					function saludame()
					{
						echo "<br>Bienvenidos al curso anazado de PHP";
					}
					
				}
				$mi_primer_objeto = new mi_Primera_Clase();
				echo $mi_primer_objeto->mi_primera_propiedad; 
				$mi_primer_objeto->mi_primera_propiedad="Centro de Estudios de Telecomunicaciones";
				echo $mi_primer_objeto->saludame();
				echo "<br>".$mi_primer_objeto->mi_primera_propiedad; 				
				?>
		</CENTER>
	</BODY>
</HTML>