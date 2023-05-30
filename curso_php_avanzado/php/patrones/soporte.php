<?php
class Support 
{
    private $username;

    function __construct($username)
    {
        $this->username = $username;
        
    }

    public function sendMessage($title, $message, $phoneNumber)
   
    {
        echo "<br>";
        echo $this->username;
        echo "<br>";
        if('' == $phoneNumber) {
            return $this->sendPublic($title, $message);
        } else {
            return $this->sendPrivate($title, $message, $phoneNumber);
        }
    }

    protected function sendPublic($title, $message)
    {
        echo "sendPublic<br>";
        // El mensaje se publicaría en el tablón de soporte (público)
        // Emplearía una clase especial PublishBoard
    }

    protected function sendPrivate($title, $message, $phoneNumber)
    {
        echo "sendPrivate";
        // El mensaje se enviaría al backend del soporte (privado)
        // Emplearía una clase especial PublishBackend
    }
}
?>