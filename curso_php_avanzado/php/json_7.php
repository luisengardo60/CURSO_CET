<!DOCTYPE html>
<html>
<body>

<p>Como accesar todos los valores de las propiedades de un objeto JSON con anidación de lazos.</p>
<p id="demo"></p>
<script>
var myObj = {
  "name":"John",
  "age":30,
  "cars": {
    "car1":"Ford",
    "car2":"BMW",
    "car3":"Fiat"
  }
}
document.getElementById("demo").innerHTML += myObj.cars.car2 + "<br>";
//or:
document.getElementById("demo").innerHTML += myObj.cars["car2"];
</script>

</body>
</html>
