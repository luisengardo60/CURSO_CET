<?php
include_once 'users.php';

$user = new User();

$id="Mario";
$user->load($id);

echo '<pre>';
print_r($user);
?>