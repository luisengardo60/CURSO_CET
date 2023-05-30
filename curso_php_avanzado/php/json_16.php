<!DOCTYPE html>
<html>
<body>

<h2>Get data as JSON from a PHP file on the server.</h2>

<?php
$myArr = array("John", "Mary", "Peter", "Sally");

$myJSON = json_encode($myArr);

echo $myJSON;
?>