<HTML>
	<HEAD>
		<TITLE>Programación orientada a objetos</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Modelo de objetos</H2>
			<h3>Clonación de objetos</h3>
			<?php
			class una_clase{
				public $un_contador=0;
				public $una_propiedad="nada";
				function __clone(){
					$this->un_contador++;
					$this->una_propiedad="algo";
				}
			}
			$obj1 = new una_clase();
			$obj2 = clone $obj1;
			$obj3=$obj1;

			print_r($obj1);
			echo "<br>";
			print_r($obj2);
			echo "<br>";
			print_r($obj3);
			?>
		</CENTER>
	</BODY>
</HTML>