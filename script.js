function preLoad() {
  a1 = new Image; a1.src = "man.svg";  
  a2 = new Image; a2.src = "woman.svg";
}

function im(image) {
  document.getElementById(image[0]).src = eval(image + ".src")
}


var slider1 = document.getElementById("h");
var output1 = document.getElementById("value1");
output1.innerHTML = slider1.value;

var slider2 = document.getElementById("w");
var output2 = document.getElementById("value2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
    output2.innerHTML = this.value;
  }

slider1.oninput = function changeHeight(){
    var x = document.getElementById("h").value;
    document.getElementById("a").style.width=String(x*0.77) + "px";
    output1.innerHTML = this.value;
} 



