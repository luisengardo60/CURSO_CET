<?php
class User
{
    protected $connection = null;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=curso_php", 'root', '');
    }

    public function load($id)
    {
        echo $id;
        echo $id;
        $sql = ('SELECT * FROM nomina_2 where nombre='.$id);
        $result = $this->connection->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);

        foreach($row as $column => $value) {
            $this->$column = $value;
           
        }
    }
}
?>