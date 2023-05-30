<!DOCTYPE html>
<html>
<body>
<h2>Creación de un objeto con una cadena JSON</h2>
<p id="demo"></p>
<script>
var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}');
document.getElementById("demo").innerHTML = obj.name + ", " + obj.age;
</script>
</body>
</html>