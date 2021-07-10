function myFunction() {
    let button1 = document.getElementById("button1");


var button1=document.getElementById("button1");
var output1=document.getElementById("Left");
output1.innerHTML=button1
.oninput=function(){
    output1.innerHTML=this.value;
}

var button2=document.getElementById("button2");
var output2=document.getElementById("Stop");
button2.innerHTML=button2
button2.oninput=function(){
    output2.innerHTML=this.value;
}

var button3=document.getElementById("button3");
var output3=document.getElementById("Right");
button3.innerHTML=button3
button3.oninput=function(){
    output3.innerHTML=this.value;
}
var button4=document.getElementById("button4");
var output4=document.getElementById("Forward");
button4.innerHTML=button4
button4.oninput=function(){
    output4.innerHTML=this.value;
}
var button5=document.getElementById("button5");
var output5=document.getElementById("Backward");
button5.innerHTML=button5
button5.oninput=function(){
    output5.innerHTML=this.value;
}
