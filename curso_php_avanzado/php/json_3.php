<!DOCTYPE html>
<html>
<body>
<h2>Almacena y extrae data local.</h2>
<p id="demo"></p>
<script>
var myObj, myJSON, text, obj;
//Storing data:
myObj = { "name":"Mario", "age":31, "city":"New York" };
myJSON = JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);
//Retrieving data:
text = localStorage.getItem("testJSON");
obj = JSON.parse(text);
document.getElementById("demo").innerHTML = obj.name;
</script>

</body>
</html>
