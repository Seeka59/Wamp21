const delire = document.getElementById('delire');

let array = ["","ForFun","LALALALALA"];

let wordArray = 0;
let letterArray = 0;
let arrayTime = 0;

const createDelire =()=>{

    const letter = document.createElement("span");
    delire.appendChild(letter);
    letter.textContent = array[wordArray][letterArray];
    setTimeout(() => {
        letter.remove();
    },2800);

};
const loop = () => {
    setTimeout(()=>{

    
    if(wordArray>=array.length)
    {
        wordArray=0;
        letterArray=0;
        loop();
    }else if(letterArray < array[wordArray].length){
        createDelire();
        letterArray++;
        loop();
    }else{
        wordArray++;letterArray=0;
        setTimeout(() => {loop();},2800)
    }
},100);
}
createDelire();
loop();