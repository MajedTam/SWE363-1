

// var timeInMin = 50;

 var timeInSec = 1;
var innerLine = document.getElementById("innerLine");
var innerLineWidth = 100; // 99%, CHANGE HERE IF YOU CHANGEED IT IN CSS
var timeRemaining = document.getElementById("time");

var totalSec = timeInMin*60 + timeInSec;
var reductionRate = 100/totalSec; 
timeRemaining.innerHTML =timeInMin +" m"+ " "+ 0+" s";
 


  


function TimeBar() {

var interval = setInterval(function(){ 
    timeInSec = timeInSec-1;
    timeRemaining.innerHTML =timeInMin +" m"+ " "+ timeInSec+" s";
    innerLineWidth = innerLineWidth-reductionRate
    innerLine.style.width = `${innerLineWidth}%`
    
    if(timeInSec==0 && timeInMin==0){
        clearInterval(interval)
        
    }
    if(timeInSec == 0)
    {timeInMin--; timeInSec=60;}

   
 
    
 }, 1000);

 }

window.onload = TimeBar();

