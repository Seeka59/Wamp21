//TEXTE//
const target = document.getElementById('target');
const messDac = document.getElementById('mesDac');
let array = [" ","Maçonnerie","Carrelage", "Platrerie", "Rejointoiment", "Devlopement Web :"  ];
let wordIndex = 0;
let letterIndex = 0;
let arrayTime = 0;

const createMessageDac =() =>{

const messageDac = document.createElement("span");
target.appendChild(messageDac);
messageDac.textContent = messageDac[arrayTime];
setTimeout(() =>{
messDac.remove();
},2000);

};

createMessageDac();

const createLetter =() => {
    const letter = document.createElement("span");
    target.appendChild(letter);

    letter.textContent = array[wordIndex][letterIndex];

    setTimeout(() => {
    letter.remove();
    }, 2800);

};

createLetter();

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
loop();


if(array[0])
{
    var img = document.createElement("img");
    img.src = "un.png";

    var div = document.getElementById("x");
    div.appendChild(img);
    div.setAttribute("style", "text-align:center");
}
//

//
