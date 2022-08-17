

// Fetch Une Data Ici //
let arrayData;

let arrayType = ["Radis","Cornichon"];

for(let i = 0;i>arrayType;i++)
{
let typeColor = document.getElementById(arrayType);
typeColor.style.color = "Red";
}



let ville = 'Willems';
let temperature;
recevoirTemperature(ville);


function resolveAfter2Seconds() {
    return new Promise(resolve => {
      setTimeout(() => {
        resolve('resolved');
      }, 2000);
    });
  }
  
  async function asyncCall() {
    const result = await resolveAfter2Seconds();
    if(temperature>-5 && temperature<14)
    {
        if(temperature>-5 && temperature<5)
        {
        alert("Mauvaise Temperature : "+temperature);  
        }

        if(temperature>4 && temperature<14)
        {
        alert("Faible Temperature : "+temperature);  
        }
    }
    
    if(temperature>13 && temperature<23)
    {
      alert("Temperature Moderé: "+temperature);  
    }
    if(temperature>22 && temperature<32)
    {
      alert("Temperature Chaude: "+temperature);  
    }
    if(temperature>31 && temperature<41)
    {
      alert("Temperature Hard : "+temperature);  
    }
   
    
    // expected output: "resolved"
  }
  
  asyncCall();


let button = document.querySelector('#changer');
button.addEventListener('click', () => {
  ville = prompt('Choisissez une ville :');
  recevoirTemperature(ville);
});

function recevoirTemperature(ville) {
  const url = 'https://api.openweathermap.org/data/2.5/weather?q=' + ville + '&appid=eb3e55ca0093756f2541d5ad27c5021c&units=metric';
  
  let requete = new XMLHttpRequest();
  requete.open('GET', url);
  requete.responseType = 'json';
  requete.send();

  requete.onload = function() {
    if (requete.readyState === XMLHttpRequest.DONE) {
      if (requete.status === 200) {
        let reponse = requete.response;
        let ville = reponse.name;
        temperature = reponse.main.temp;
        document.querySelector('#ville').textContent = ville;
        document.querySelector('#temperature_label').textContent = temperature;
      } else {
        alert('Un problème est intervenu, merci de revenir plus tard.');
      }
    }
  }
}


function addSwitch(plantes)
{
  
switch(plantes)
{
  case "Radis":
    console.log("Radis")
    break

  case "Tomate" :
    console.log("Tomate")
    break

  case "Choux Chinois" :
  console.log("Choux Chinois")
  break

  default:
    alert("Error404");

}

}
