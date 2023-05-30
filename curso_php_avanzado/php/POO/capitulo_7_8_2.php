<HTML>
	<HEAD>
		<TITLE>Herencia</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><stron>Redefinición de métodos y atributos en las clases hijas</em></strong></H2>
<?PHP
class Perro
{
public $nombre = "Cacri";
public function ladrar(){
echo "Guau!";
}
}
class Bulldog extends Perro {
public function ladrar(){
echo "Grrrrrr!!";
}
}
$cachorro = new Bulldog(); // Instancia de la clase hija
$cachorro2=new Perro();
echo $cachorro->nombre."<br>";
$cachorro->nombre = "Miecri"; // Heredamos la propiedad padre $nombre y le asignamos Jeffrey
echo $cachorro->nombre."<br>  "; // Devuelve Jeffrey
$cachorro->ladrar(); // Devuelve Grrrrr! ya que ha sobreescrito la función padre ladrar().
echo "<br>".$cachorro2->nombre
?>
</CENTER>
</BODY>
</HTML>