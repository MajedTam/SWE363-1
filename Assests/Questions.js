
var addButton = document.getElementById("addButton").addEventListener("click" , function(){

var question = document.getElementById("firstQuestion").cloneNode(true);
question.style.display = 'block'
var box2 = document.getElementById("box2");
box2.appendChild(question);

})



