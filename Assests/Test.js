var timeInMin = 0.4;
var timeInSec = timeInMin*60;
var innerLine = document.getElementById("innerLine");
var innerLineWidth = 99; // 70%, CHANGE HERE IF YOU CHANGEED IT IN CSS
var timeRemaining = document.getElementById("time");

var reductionRate = innerLineWidth/timeInSec; // 

 function TimeBar() {

setInterval(function(){ 
    timeInSec = timeInSec-1;
    timeRemaining.innerHTML = timeInSec+" s";
    innerLineWidth = innerLineWidth-reductionRate
    innerLine.style.width = `${innerLineWidth}%`

    if(timeInSec == 0)
    clearInterval()
    
 }, 1000);






 }



 TimeBar();
