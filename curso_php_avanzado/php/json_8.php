<!DOCTYPE html>
<html>
<body>

<p>Accesar el valor de un arreglo de un objeto JSON.</p>

<p id="demo"></p>

<script>

var myObj, x;
myObj = {
    "name":"John",
    "age":30,
    "cars":[ "Ford", "BMW", "Fiat" ]
};
x = myObj.cars[0];
document.getElementById("demo").innerHTML = x;

</script>

</body>
</html>
