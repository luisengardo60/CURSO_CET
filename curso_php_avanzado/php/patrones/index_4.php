<?php
include ('decorador.php');
echo "Patrones de Diseño:<br>";
echo "Decorator<br><br>";
$a='Modern PHP';
$b='Josh';
$c='Lockhart';
$book = new estandarClass($a,$b,$c);
$bookFormatter = new PrettyPrint($book);
echo $book->title . " es un libro escrito por: " . $bookFormatter->getAuthor() . "<br>";
echo "Pero encontrarás el libro de esta forma: " . $bookFormatter->getAuthorSortable() . "<br>";
?>