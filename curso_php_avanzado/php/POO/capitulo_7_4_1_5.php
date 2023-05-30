	<HTML>
	<HEAD>
		<TITLE>Acceso a los miembros de un objeto</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</HEAD>
	<BODY>
		<CENTER>
			<H2><em><strong>Métodos privados y protected. Error intencional en llamado a un método privado desde otra clase</em></stronger></H2>
<?PHP
// Los métodos privados solo se pueden
//operar en la misma clase y no en otra heredada  heredada.
//Para ello se deben utilizar métodos Protegidos
//como protected			
class Coche{
protected $velocidad=0;
private $combustible=10;
function setVelocidad($velocidad) {
if ($this->getCombustible()){
$this->velocidad=(int) $velocidad;
}else{
$this->velocidad=0;
}
}
private function getCombustible(){
return $this->combustible;
}
}
Class Deportivo extends Coche{
function aumentarVelocidad(){
if ($this->getCombustible()){
$this->velocidad=$this->velocidad*2;
}else{
$this->velocidad=0;
}
return $this->velocidad;
}
}
$deportivo=new Deportivo();
$deportivo->setVelocidad(100);
echo $deportivo->aumentarVelocidad();// PHP Fatal error:  Call to private method Coche::getCombustible()			
?>
</CENTER>
</BODY>
</HTML>