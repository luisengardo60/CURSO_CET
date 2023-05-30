	<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Método __call</strong></em></H2>
			<H2><em><strong>__tooString se ejecuta al hacer echo a un objeto que no existe. __call, al tratar de usar un método que no existe</strong></em></H2>
<?PHP
//El método __call esboza el método
// y sus argumentos, cuando no existe dicho método.
//se aprovecha de colocar el método __toString
//utilizado cuando se hace echo al método
class Objeto {
private $id;
private $nombre;
private $email;
public $nombre2;
//...  
public function __toString(){
return "esto es una prueba<br>";
}
public function prueba($test){
	$this->id=$test;
}
public function __call($metodo, $args) {
$arg = implode(',', $args);
echo $arg;
echo "fallo al llamar al método '$metodo()' con los argumentos $arg";
}
}
$obj = new Objeto(1,"objeto1","prueba1@ejemplo.com");
$p = clone $obj;
echo $p;// Un echo al objeto buscará al método __tooString()
$test1=2;
$test2=8;
$p->noExiste($test1,$test2);
?>
</CENTER>
</BODY>
</HTML>