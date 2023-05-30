<!DOCTYPE html>
<html>
<body>
<h2>Conversión de una cadena fecha en formato JSON en objeto JS.</h2>
<p id="demo"></p>
<script>
var text = '{ "name":"John", "birth":"1986-12-14", "city":"New York"}';
var obj = JSON.parse(text);
obj.birth = new Date(obj.birth);
document.getElementById("demo").innerHTML = obj.name + ", " + obj.birth; 
</script>
</body>
</html>
