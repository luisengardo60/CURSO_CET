<!DOCTYPE html>
<html>
<body>
<p>Accesa un objeto usando []</p>
<p id="demo"></p>
<script>
var myObj, x;
myObj = { "name":"John", "age":30, "car":null };
x = myObj["name"];
document.getElementById("demo").innerHTML = x;
</script>
</body>
</html>
