const _section = document.querySelector("section");

const _button = document.getElementById('button');

let messageG;


fetch('http://localhost:5500/posts')
.then(function(res) {
   if(!res.ok){
    throw new Error(`HTTP error: ${res.status}`);
   }
  return res.json()
})
.then(function(json) {
  messageG = json; 
});



_button.addEventListener('click', function(){


var myArticle = document.createElement('article');

for(let i = 0; i < messageG.length;i++)
    {    
        let _h5 = document.createElement("h5");
        let _p = document.createElement("p");
        console.log("author " + messageG[i].author);
        _h5.textContent = messageG[i].author;
        _p.textContent = messageG[i].message;
       myArticle.appendChild(_h5); 
       myArticle.appendChild(_p); 
       _section.appendChild(myArticle);
}  

});

