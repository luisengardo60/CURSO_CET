	<HTML>
	<HEAD>
		<TITLE>Herencia</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2>Caso estudio extends </H2>
			
<?PHP
include("capitulo_7_8_5_0.php");
class Fichero_PNG extends Fichero{
	private $alto;
	private $ancho;
	private $bits_por_color;
	function __construct($f){
		parent::construct($f);
		$props=getimagesize($f);
		$ind_tipo_img=2;
		if ($props[$ind_tipo_img] !=3) {//es un fichero PNG?
		die("*** ERROR: '$f' no tiene formato gráfico PNG");
	}else{
		$ind_alto_img=0;
		$ind_ancho_img=1;
		$this->alto=$props[$ind_alto_img];
		$this->ancho=$props[$ind_ancho_img];
}
}
	function alto(){
		return $this->alto;
	}
	function ancho(){
		return $this->ancho;
	}
}
$obj_png=new Fichero_PNG('graf.png');
echo "El tmaño del fichero es: ".$obj_png->octetos()." octetos<br/>";
echo "Las dimensiones del gráfico son: ".$obj_png->alto()." y ".$obj_png->ancho();
?>
</CENTER>
</BODY>
</HTML>