

var num=0;

var trial = 6;

var current=6;

var myVar = setInterval(function(){ myTimer() }, 1000);
function play() {
    var audio = document.getElementById('tic1');
    if (audio.paused) {
        audio.play();
    }else{
        audio.pause();
        audio.currentTime = 0
    }
}

function myTimer() {
    var d = new Date();
    var t = d.toLocaleTimeString();
    document.getElementById("demo").innerHTML = t;
}
var sec = 0;

function pad(val) {
    return val > 9 ? val : "0" + val;
}
var timer = setInterval(function () {
    document.getElementById("seconds").innerHTML = pad(++sec % 60);
    document.getElementById("minutes").innerHTML = pad(parseInt(sec / 60, 10));
}, 1000);

setTimeout(function () {
    alert("TIME OVER");
}, 120000);
function calc()

{
 
num=Math.floor(Math.random()*101);

document.getElementById('trial').innerHTML=current+" guesses left";

}





function try_num(){

var guess_num=new Number(document.getElementById('play').value);

if(guess_num==num )

{

alert('You have entered the correct secret number '+num+'.\n Restarting game.');
       
current=trial;

calc();

}else{

if(guess_num>num && current>1)

{

alert('Sorry! Your Guess Is Too High');

current=current-1;

document.getElementById('trial').innerHTML=current+" guesses left";

}

if(guess_num<num && current>1)

{

alert('Sorry! Your Guess Is Too Small');

current=current-1;

document.getElementById('trial').innerHTML=current+" guesses left";

}

if(current==1)

{alert('Sorry !! Game Over.Correct number was '+num+'.\n Please try again.');

current=trial;

calc();

}

}}

