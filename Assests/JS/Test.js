var timeInMin = 4;
var timeInSec = 60;
var innerLine = document.getElementById("innerLine");
var innerLineWidth = 99; // 70%, CHANGE HERE IF YOU CHANGEED IT IN CSS
var timeRemaining = document.getElementById("time");

var totalSec = timeInMin*60 + timeInSec;
var reductionRate = innerLineWidth/totalSec; // 
timeRemaining.innerHTML = timeInSec+" s";
 function TimeBar() {

var interval = setInterval(function(){ 
    timeInSec = timeInSec-1;
    timeRemaining.innerHTML =timeInMin +" m"+ " "+ timeInSec+" s";
    innerLineWidth = innerLineWidth-reductionRate
    innerLine.style.width = `${innerLineWidth}%`

    if(timeInSec == 0)
    {timeInMin--; timeInSec=60;}

    if(timeInSec==0 && timeInMin==0)
    clearInterval(interval)
    
 }, 1000);

 }

window.onload = TimeBar();


