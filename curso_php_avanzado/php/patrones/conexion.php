<?php
// connection.php
class Connection
{
    private function __construct()
    {
        echo 'Hemos creado un nuevo objeto <br />';
    }
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new Connection();
        } else {
            echo 'El objeto ya existe, no puedes volver a crearlo <br />';
        }
        return $instance;
    }
}
?>