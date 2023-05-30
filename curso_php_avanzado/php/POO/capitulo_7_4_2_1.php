<HTML>
	<HEAD>
		<TITLE>Visibilidad</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Propiedades Privadas</H2>
				
			<H2><em><strong>Métodos __set y __get.</strong></em></H2>
			<H2><em><strong>__set se ejecuta al asignar un valor a una propiedad y el mismo no existe</strong></em></H2>
			<H2><em><strong>__get se ejecuta al mostrar un valor a una propiedad y el mismo no existe</strong></em></H2>
				<?PHP
				// se introduce un error intencional en una variable
					class Despiste{
						public $identif_muy_largo;
						function __set($propiedad,$valor){
							echo "Atención!!!, propiedad '$propiedad' NO declarada ($valor)<br>";
						}
						function __get($propiedad){
							echo "Atención!!!, propiedad '$propiedad' NO declarada<br>";
						}
					}	
					$obj= new Despiste;
					$obj->identify_muy_largo='hola curso PHP avanzado...'; //aquí está el error intencional
					echo $obj->identif_muuy_largo;// otro error. No existe la propiedad
					echo $obj->iden_muy_largo;
					$obj->identyfy_muy_largo='aprendiendo objetos...';
				?>
		
		</CENTER>
	</BODY>
</HTML>
