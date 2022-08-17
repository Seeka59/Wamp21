
let button = document.getElementById('button');
let _section = document.getElementById('section');

// EVENT
button.addEventListener('click', () => {
//event click button
fetch("http://localhost:5500/post")
.then(function(res)
{
    return res.json();
})
.then(function(json)
{
   addTable(json);
})


})


function addTable(jsonT) {

let AllTable;
AllTable = jsonT;

let _div = document.createElement('div');

for(let i = 0;i < AllTable.length;i++)
{
    let h5Message = document.createElement('h5');
    h5Message.textContent = AllTable[i].author;
    _div.appendChild(_h5);
}
_section.appendChild(_div);
}