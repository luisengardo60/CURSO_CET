<HTML>
	<HEAD>
		<TITLE>Programación orientada a objetos</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong><p>Aproximación con objetos.</p><p>Reusabilidad del código</p></strong></em></H2>
			<h3></h2>
				<?PHP
				class Class_Celda{
					public $celda_alin_vertical;
					public $celda_alin_horizontal;
					public $celda_color_fondo;
					public $letra_tipo;
					public $letra_tamaño;
					public $letra_color;
					function pinta_celda($contenido){
						echo "<td align='$this->celda_alin_vertical'
						valign='$this->celda_alin_horizontal'
						bgcolor='$this->celda_color_fondo'>";
						echo "<font face='$this->letra_tipo' size='$this->letra_tamaño'
						color='$this->letra_color'>$contenido</font></td>";
					}
				}
					$filial=new Class_Celda();
					$filial->celda_alin_vertical='middle';
					$filial->celda_alin_horizontal='center';
					$filial->celda_color_fondo='green';
					$filial->letra_tipo='Arial';
					$filial->letra_tamaño='10';
					$filial->letra_color='white';
					$filia2=new Class_Celda();
					$filia2->celda_alin_vertical='middle';
					$filia2->celda_alin_horizontal='center';
					$filia2->celda_color_fondo='orange';
					$filia2->letra_tipo='Arial';
					$filia2->letra_tamaño='8';
					$filia2->letra_color='white';
					$filia3=new Class_Celda();
					$filia3->celda_alin_vertical='middle';
					$filia3->celda_alin_horizontal='center';
					$filia3->celda_color_fondo='black';
					$filia3->letra_tipo='Arial';
					$filia3->letra_tamaño='5';
					$filia3->letra_color='white';
					echo "<table border ='0'><tr>";
					$filial->pinta_celda('PHP');
					$filial->pinta_celda('5');
					echo "</tr></table>";
					echo "<table border ='0'><tr>";
					$filia2->pinta_celda('java');
					$filia2->pinta_celda('8');
					echo "</tr></table>";
					echo "<table border ='0'><tr>";
					$filia3->pinta_celda('java script');
					$filia3->pinta_celda('2.2');
					echo "</tr></table>";

				?>
		</CENTER>
	</BODY>
</HTML>