fetch('http://localhost:5500/posts')
.then(function(res)
{
    if(!res.ok)
    {
        throw new Error (`HTTP ERROR ${res.status}`);
    }
    return res.json();
})
.then(function(json)
{
addMyData(json);
}
);

addMyData(Message)
{
    const _section = document.querySelector('section');
    var _article = document.createElement('article');
    let AllMessage;
    AllMessage = Message;
for(let i = 0; i < AllMessage.length;i++)
{
     let _h5 = document.createElement('h5');
    let _p = document.createElement('p');
    _h5.textContent = AllMessage[i].author;
    _p.textContent = AllMessage[i].message;
    _article.appendChild(_h5);
    _article.appendChild(_p);
    _section.appendChild(_article);
}
    


}