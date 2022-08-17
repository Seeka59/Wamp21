const arrayType = ["Radis","Fraise","aa"];
const arrayTempsMin = [" Mini : 0","Mini :0"];
const arrayTempsIdeal = [" Ideal : 18","Ideal : 20"];
const arrayTempsMax = [" Max : 30","Max : 30"];
for(let i =0;arrayType.length>i;i++)
{

const target = document.getElementById(arrayType[i]);
let array = [arrayTempsMin[i], arrayTempsIdeal[i],arrayTempsMax[i]];


for(let a = 0; array.length>a;a++)
{
const letter = document.createElement("span");  
target.appendChild(letter);
letter.textContent = array[a];
}

const divPlante = document.getElementById("divPlante");



/*

let wordIndex = 0;
let letterIndex = 0;

const createLetter =() => {
    const letter = document.createElement("span");
    target.appendChild(letter);
    letter.textContent = array[wordIndex][letterIndex];
    setTimeout(() => {
    letter.remove();
    }, 2800);

};


const loop = () => {
setTimeout(() => {
    if(wordIndex>=array.length){
        wordIndex =0;
        letterIndex =0;
        loop();
    }else if(letterIndex < array[wordIndex].length)
{
    createLetter();
    letterIndex++;
    loop();
}else {
    wordIndex++;
    letterIndex =0;
    setTimeout(() => {loop();},2800)
}
}, 100);
};
   
 
    
*/
 }