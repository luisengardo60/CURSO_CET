<!DOCTYPE html>
<html>
<body>

<p>Uso de [] para obtener los valores de las propiedades de un objeto JSON.</p>

<p id="demo"></p>

<script>
var myObj = { "name":"John", "age":30, "car":null };
for (x in myObj) {
    document.getElementById("demo").innerHTML += myObj[x] + "<br>";
}
</script>

</body>
</html>

