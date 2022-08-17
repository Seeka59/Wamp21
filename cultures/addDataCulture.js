let button = document.getElementById('button');
let select = document.getElementById('select');
let compteurInput = 0;

button.addEventListener('click', () => {
let input = document.createElement('input');
select.appendChild(input);
compteurInput++;
}
)