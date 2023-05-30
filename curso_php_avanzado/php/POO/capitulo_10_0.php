<HTML>
    <HEAD>
        <TITLE>Herencia</TITLE>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </HEAD>
    
        
    
    <BODY>
	<CENTER>
            <H2>Clases, y métodos abstractos</H2>
            <H3><em><strong>Interf</strong></em></H3>
<H3><em><strong>En interfaces solo se pueden declarar métodos. En cada clase que lo implemente, entonces</strong></em></H3>
       <H3><em><strong>se definirá el código del método especificado en la interfaz. Al igual que abstrac, no puede instanciarse</strong></em></H3>        
 <?PHP
                // En interfaces solo se pueden declarar
                //métodos.
                // En cada clase que lo implemente, entonces
                //se definirá el código del método especificado 
                // en la interfaz.
                //Al igual que abstrac, no puede instanciarse
interface encendible{ 
    public function encender(); 
    public function apagar(); 
}
class bombilla implements encendible{ 
    public function encender(){ 
        echo "<br>Y la luz se hizo..."; 
    } 

    public function apagar(){ 
        echo "<br>Estamos a oscuras..."; 
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
} 

$mibombilla = new bombilla(); 
$micoche = new coche(); 

enciende_algo($mibombilla); 
enciende_algo($micoche);
                ?>
         </CENTER>
    </BODY>
</HTML>
