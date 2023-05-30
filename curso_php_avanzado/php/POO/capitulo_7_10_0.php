<HTML>
    <HEAD>
        <TITLE>Implements interface</TITLE>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </HEAD>
    <BODY>
        <CENTER>
            <H3><em><stong>Interfaces</em></strong></H3>
<H3><em><strng>No se pueden instanciar y tampoco especificar propiedades.</em></strong></H3>
<H3><em><strng>Los métodos son como un índice o croquis del programa</em></strong></H3>
<H3><em><strng>No se pueden heredar sino implementar (implments.)</em></strong></H3>
<?PHP
interface encendible{
public function encender();
public function apagar();
}
class bombilla implements encendible{
public function encender(){
echo "<br> y la luz se hizo...";
}
public function apagar(){
echo "<br> Estamos a oscuras...";
}
}
class coche implements encendible{
private $gasolina;
private $bateria;
private $estado = "apagado";
function __construct(){
$this->gasolina = 10;
$this->bateria = 10;
}
public function encender(){
if ($this->estado == "apagado"){
if ($this->bateria > 0){
if ($this->gasolina > 0){
$this->estado = "encendido";
$this->bateria --;
echo "<br><b>Enciendo...</b> estoy encendido!";
}else{
echo "<br>No tengo gasolina";
}
}else{
echo "<br>No tengo batería";
}
}else{
echo "<br>Ya estaba encendido";
}
}
public function apagar(){
if ($this->estado == "encendido"){
$this->estado = "apagado";
echo "<br><b>Apago...</b> estoy apagado!";
}else{
echo "<br>Ya estaba apagado";
}
}
public function cargar_gasolina($litros){
$this->gasolina += $litros;
echo "<br>Cargados $litros litros";
}
}
function enciende_algo ($algo){
$algo->encender();
$algo->apagar();
}
$mibombilla = new bombilla();
$micoche = new coche();
echo " La bombilla:";
enciende_algo($mibombilla);
echo "<hr>";
echo "El coche:";
enciende_algo($micoche);
?>
</CENTER>
</BODY>
</HTML>