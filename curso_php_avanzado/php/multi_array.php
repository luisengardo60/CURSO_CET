<!DOCTYPE html>
<html>
<body>
<?php
$animal = array(
array("Perro", "Gato"),
array("Lombriz", "Burro"),
array("Murciélago", "Cocodrilo")
);
echo $animal[2][1]."<br>";
echo $animal[0][0]."<br>";
$animal[0] = array("Perro", "Gato");
$animal[1] = array("Lombriz", "Burro");
$animal[2] = array("Murciélago", "Cocodrilo");
echo $animal[2][1]."<br>";
echo $animal[0][0]."<br>";
for ($row = 0; $row < 3; $row++) {
echo "<p><b>Fila número: $row</b></p>";
echo "<ul>";
for ($col = 0; $col < 2; $col++) {
echo "<li>".$animal[$row][$col]."</li>";
}
echo "</ul>";
}


$miFecha = array(
array(
array("13 de enero de 2015", "11 de febrero de 2018"),
array("13 de enero de 2020", "11 de febrero de 2015"),
),
array(
array("3 de agosto de 2017", "1 de octubre de 2016"),
array("3 de agosto de 2013", "1 de octubre de 2019"),
),
array(
array("10 de junio de 2020", "11 de marzo de 2019"),
),
array(
array("22 de marzo de 2020", "28 de mayo de 2019"),
array("22 de marzo de 2019", "28 de mayo de 2018"),
array("22 de marzo de 2018", "28 de mayo de 2017"),
array("22 de marzo de 2017", "28 de mayo de 2016"),
)
);

echo $miFecha [0] [0] [0]. "<br>"; echo $miFecha [0] [0] [1]. "<br>";
echo $miFecha [0] [1] [0]. "<br>"; echo $miFecha [0] [1] [1]. "<br>";
echo $miFecha [1] [0] [0]. "<br>"; echo $miFecha [1] [0] [1]. "<br>";
echo $miFecha [1] [1] [0]. "<br>"; echo $miFecha [1] [1] [1]. "<br>";
echo $miFecha [2] [0] [0]. "<br>"; echo $miFecha [2] [0] [1]. "<br>";
echo $miFecha [3] [0] [0]. "<br>"; echo $miFecha [3] [0] [1]. "<br>";
echo $miFecha [3] [1] [0]. "<br>"; echo $miFecha [3] [1] [1]. "<br>";
echo $miFecha [3] [2] [0]. "<br>"; echo $miFecha [3] [2] [1]. "<br>";
echo $miFecha [3] [3] [0]. "<br>"; echo $miFecha [3] [3] [1]. "<br>";

?>
</body>
</html>