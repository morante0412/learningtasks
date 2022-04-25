/*eslint-env browser*/
let d = new Date();
var name = prompt("What is thy naem?");
alert("Greetings, " + name + ". The time and day is " + d + ". Welcome!");

function myFunction() {
  document.getElementById("clickity").innerHTML = "Hover on the red pin";
}

function bigImg(x) {
  x.style.height = "128px";
  x.style.width = "128px";
}
function normalImg(x) {
  x.style.height = "64px";
  x.style.width = "64x";
}

function showCoords(event) {
                var x = event.clientX;
                var y = event.clientY;
                var coords = "X coords: " + x + ", Y coords: " + y;
                document.getElementById("place").innerHTML = coords;
}