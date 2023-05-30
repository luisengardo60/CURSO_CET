<!DOCTYPE html>
<html>
<body>
<p>Recorriendo el arreglo de un objeto JSON con lazo for</p>
<p id="demo"></p>
<script>
var myObj, i, x = "";
myObj = {
    "name":"John",
    "age":30,
    "cars":[ "Ford", "BMW", "Fiat" ]
};
for (i = 0; i < myObj.cars.length; i++) {
    x += myObj.cars[i] + "<br>";
}
document.getElementById("demo").innerHTML = x;
</script>

</body>
</html>