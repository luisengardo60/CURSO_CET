<HTML>
	<HEAD>
		<TITLE>Visibilidad</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong><p>Propiedades Privadas.</p>Un error intencional al tratar de accesar la variable fuera de la clase<p></strong></em></H2>
				<?PHP
				//Hasta ahora, todas las propiedades que hemos usado
				//públicas, puesto que se le puede accesar fuera del objeto.
				//En la mayoría de los casos no se desea esta característica
				//dado que se altera la propiedad desde otro punto, la
				//funcionalidad de dicha propiedad se puede ver comprometida
				//teniendo como consecuencia un mal funcionameinto del 
				//software
				// En este caso, la propiedad solo será modificable desde
				//los métodos del objeto, y no de otro. Ni siquiera
				//estando fuera de la clase que contiene a dichas propiedades
				//y métodos
				class Clase_celda{
					private $celda_color_fondo;
					function pon_color_fondo($color) {
						if ($color=='orange' or $color=='red' or $color=='yellow'){
							$this->celda_color_fondo=$color;
							echo $this->celda_color_fondo.", es un color permitido.";}
							else{
								//die("ERROR: no está permitido '$color' como color de fondo");
								echo "ERROR: no está permitido '$color' como color de fondo";
							}

						
					}

				}
				$fila=new Clase_celda();
				//si trata de accesar $fila->celda_color_fondo desde aquí, PHP emitirá un error de variable.
				//El error está en la línea que sigue al tratar de accesar una propiedad privada.
				//$fila->celda_color_fondo="yellow";
				echo "<br>";
				$fila->pon_color_fondo('green');
				echo "<br>";
				$fila->pon_color_fondo('yellow');
				echo "<br>";
				$fila->pon_color_fondo('black');						
				?>
		</CENTER>
	</BODY>
</HTML>
