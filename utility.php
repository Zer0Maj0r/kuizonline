<html>
<script>
var fontSize = 1;
function zoomIn() {
fontSize += 0.1;
document.body.style.fontSize = fontSize + "em";
}
function zoomOut() {
fontSize -= 0.1;
document.body.style.fontSize = fontSize + "em";
}
</script>
<center>
<input type="button" value="++" onClick="zoomIn()"/>
<input type="button" value="--" onClick="zoomOut()"/>
<button id= "color">Warna</button>
</center>
<script>
document.getElementById('color').onClick = changeColor;
var currentColor = "red";
function changeColor() {
if(currentColor == "red"){
document.body.style.color = "blue";
currentColor = "blue";
} else {
document.body.style.color = "red";
currentColor = "red";
}
}
</script>
</html>