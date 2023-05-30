<HTML>
<HEAD>
		<TITLE>Programación orientada a objetos</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Ámbito de las variables</H2>
			<h3><em><strong>Se definieron variables globales en la función</strong></em></h3>
			<?php
			$a=1;
			$b=2;
			function suma()
			{
				global $a,$b;
				$b=$a+$b;
			}
			suma();
			echo $b."<br>";
			suma();
			echo $b."<br>";
			?>
			
		</CENTER>
	</BODY>
</HTML>