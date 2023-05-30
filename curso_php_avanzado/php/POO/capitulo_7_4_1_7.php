	7 5
<HTML>
    <HEAD>
        <TITLE>Herencia</TITLE>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </HEAD>
    <BODY>
        <CENTER>
<H2><em><strong>Propiedades y Métodos Protected<em><strong></H2>
<?PHP
class Perro
{
protected $nombre;
private $nickname;
protected function ladrar(){
print "Guau!";
print $this->nickname="lazaro";
}
}
class Bulldog extends Perro {
public function ladrarBulldog(){
echo $this->ladrar();	
// Podemos acceder a ladrar() de la clase Perro
return $this->ladrar();
}
public function setNombre($nombre){
$this->nombre = $nombre;
}
public function getNombre(){
print $this->nombre;
print $this->nickname;//un error intencional. La variable debe ser protected
}
protected function ladrar(){
print "Grrrrrrrrr!";

}
}

$cachorro = new Bulldog();
// Podemos acceder a la función ladrar() desde ladrarBulldog():
$cachorro->ladrarBulldog(); // Devuelve Guau!
//echo $cachorro->nickname;
// No podemos acceder a ladrar() desde el objeto cachorro:
//$cachorro->ladrar(); // Fatal error: Call to protected method Perro::ladrar()******************
// Tampoco podemos asignarle un nombre, pues $nombre también es protected
//$cachorro->nombre = "Hunky"; // Fatal Error: Cannot access protected property*************
// Si podemos asignarle un valor con el método setNombre():
$cachorro->setNombre("Hunky");
// Y mostrarlo con getNombre():
echo $cachorro->getNombre(); // Devuelve: Hunky                        
?>
</CENTER>
</BODY>
</HTML>