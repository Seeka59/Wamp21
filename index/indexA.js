const btn = document.querySelector('#btn');
const btnSecu = document.getElementById('btnSecu');

const img = document.getElementById('img');
const secuQuestion = document.getElementById('secuQuestion');
const secuQ = document.getElementById('secuQ');

const bonus = new Audio("troll.mp3");

 

// function()//
btn.addEventListener('click', function(){
img.classList.add('show');
secuQuestion.classList.add('show');
bonus.play();
bonus.playbackRate = 1;
});

btnSecu.addEventListener('click',function(){
    let secu = document.getElementById('secu').value;
    if(secu == "VINVIN")
    {
    bonus.pause();
    secuQ.classList.add('show');
    }else{
    bonus.currentTime = 0;
    bonus.play();
    bonus.playbackRate = 1.5;
   
}  
});
