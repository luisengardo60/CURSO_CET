<!DOCTYPE html>
<html>
<body>
<h2>Convierte cadena escrita en formato JSON a Objeto JS </h2>
<p id="demo"></p>
<script>
var myJSON = '{ "name":"John", "age":31, "city":"New York" }';
var myObj = JSON.parse(myJSON);
document.getElementById("demo").innerHTML = myObj.name; 
</script>

</body>
</html>
