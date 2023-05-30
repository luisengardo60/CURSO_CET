<HTML>
    <HEAD>
        <TITLE>Implements interface</TITLE>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </HEAD>
    <BODY>
        <CENTER>
            <H3><em><stong>No se pueden instanciar y tampoco especificar propiedades.</em></strong></H3>
<H3><em><strng>Los métodos son como un índice o croquis del programa</em></strong></H3>
<H3><em><strng>No se pueden heredar sino implementar (implments.)</em></strong></H3>
<?PHP
interface PuedeVolar {
	public function volar();
}

interface PuedeNadar{
	public function nadar();
}

class Ave {
	public function info(){
	echo " Soy un {$this->name} <br>";
	echo "pertenezco al género aves <br>";
}
}
function descripcion($ave){
	$k=0;
if ($ave instanceof Ave){
	$ave->info();
	if ($ave instanceof PuedeVolar){
	$ave->volar();
	$k=1;
}

if ($ave instanceof  PuedeNadar){
	if ($k==1){
		echo "<br>";
	}
	$ave->nadar();
}
} else{
	die("No está tipificado como ave. No se peuede describir en este proceso...");
}
}
/* Algunas implementaciones de aves diferentes.
Pero en fin, todas son aves.*/
Class Condor extends ave implements PuedeVolar{
	public $name="Condor";
	public function volar(){
		echo "Puedo volar";
	}
}
class Pinguino extends ave implements PuedeNadar{
	public $name="Pinguino";
	public function nadar(){
		echo "Puedo nadar";
	}
}
class Ganso extends ave implements PuedeVolar,PuedeNadar{
	public $name="Ganso";
	public function volar(){
		echo "Puedo volar";
	}
	public function nadar(){
	echo "Puedo nadar";
	} 
}
descripcion(new Condor);
echo "<br>";
echo "<hr>";
descripcion(new Pinguino);
echo "<br>";
echo "<hr>";
descripcion(new Ganso);
?>
</CENTER>
</BODY>
</HTML>