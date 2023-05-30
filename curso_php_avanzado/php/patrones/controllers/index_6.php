<?php
/** "mvc/";
├─ models/
    └─ Greeting.php
├─ controllers/
    └─ DefaultController.php
    └─ GreetingController.php
├─ views/
    └─ default.php
    └─ message.php
index.php**/

include_once 'defaultcontrollers.php';
include_once 'controllers/greetingcontroller.php';
include_once 'models/greeting.php';

$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$section = isset($_GET['s']) ? $_GET['s'] : '';

switch($section){
    case 'greeting':
        $controller = new GreetingController;
        break;
    default:
        $controller = new DefaultController;
}

$controller->run($action);
?>