	<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Métodos call. </H2>
			<H2><em><strong>con __call se llama un método que no existe</strong></em></H2>
			<H2><em><strong>se aprovecha el desglose de método y atributos, para tomar decisiones</strong></em></H2>
<?PHP
// En el caso siguiente, hacemos una simulación  del operador '+' de javascript, que ejecuta una concatenación
//  o una suma, dependiendo de si los operandos son cadenas de caracteres o números, respectivamente
class Sobrecargada {
	function __call($metodo,$atributos){
		if ($metodo=='operador_mas'){
			if (is_integer($atributos[0])&& is_integer($atributos[1]))
				return $atributos[0]+$atributos[1];
			else {
				for ($str="",$i=0;$i<count($atributos);$i++)

					$str.=$atributos[$i]." ";

				return $str;


			}
		}
		else 
			echo "atención: método no declarado: nota: eliminar el digito 1 en el texto ".$metodo;
	}
}
$obj= new Sobrecargada();
$resultado=$obj->operador_mas(1,3);
echo $resultado."<br>";
$resultado=$obj->operador1_mas("hola","que","tal","curso avanzado","php");
echo $resultado."<br>";

?>
</CENTER>
</BODY>
</HTML>