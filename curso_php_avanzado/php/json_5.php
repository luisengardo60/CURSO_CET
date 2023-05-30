<!DOCTYPE html>
<html>
<body>
​<p>Recorrer todas las propiedades de un objeto JSON.</p>
​<p id="demo"></p>
​<script>
var myObj = { "name":"John", "age":30, "car":null };
for (x in myObj) {
    document.getElementById("demo").innerHTML += x + "<br>";
}
</script>
​
</body>
</html>
​


