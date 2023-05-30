<?php
class Vehiculo 
{
    public $ruedas;
    public $tipo;

    public static function create($tipo, $ruedas)
    {
        switch($tipo) {
            case 'carro':
                return new Carro($ruedas);
            case 'motocicleta':
                return new Motocicleta($ruedas);
            case 'camion':
                return new Camion($ruedas);
            default:
                return new Exception("No vehicle found");
        }
    }

    public function getType()
    {
        return get_class($this);
    }
}

class Carro extends Vehiculo 
{
    public function __construct($ruedas){
        $this->ruedas = $ruedas;
    }
}
class Motocicleta extends Vehiculo 
{
    public function __construct($ruedas){
        $this->ruedas = $ruedas;
    }
}

class Camion extends  Vehiculo
{
    public function __construct($ruedas){
        $this->ruedas = $ruedas;
    }
}
?>