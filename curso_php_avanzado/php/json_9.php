<!DOCTYPE html>
<html>
<body>
<p>recorreindo el arreglo con el lazo For in</p>
<p id="demo"></p>
<script>
var myObj, i, x = "";
myObj = {
    "name":"John",
    "age":30,
    "cars":[ "Ford", "BMW", "Fiat" ]
};
for (i in myObj.cars) {
    x += myObj.cars[i] + "<br>";
}
document.getElementById("demo").innerHTML = x;
</script>

</body>
</html>