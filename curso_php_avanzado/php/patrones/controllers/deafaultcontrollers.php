<?php
// controllers/DefaultController.php
class DefaultController 
{
    public function run ($action = 'index', $id = 0)
    {
        if(!method_exists($this, $action)){        
        $action = 'index';
        }
        //echo $this->$action(0);
        return $this->$action($id);
    }
    public function index()
    {
        echo "prueba";
        include 'views/default.php';
    }
}
?>