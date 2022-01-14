/**
 * @author: Baptiste Hardelin
 *
 */
let nombre = 6; // Nombre d'image à afficher
let position = 0;
const largeurImage = 995;

let container = document.getElementById('container');
let left = document.getElementById('left');
let right = document.getElementById('right');

container.style.width = (largeurImage * nombre) + 'px';

for (let i = 1; i <= nombre; i++) {
    let div = document.createElement('div');
    div.className = 'image';
    div.style.backgroundImage = 'url(../img/image' + i + '.png)';
    container.appendChild(div);
}

left.onclick = function () {
    if (position <= 0) {
        position = -1;
    }
    position++;
    container.style.transform = 'translate(' + position * largeurImage + 'px)';
    container.style.transition = 'all 0.5s ease';
    console.log(position);
}

right.onclick = function () {
    if (position <= -5) {
        position = 1;
    }
    position--;
    container.style.transform = 'translate(' + position * largeurImage + 'px)';
    container.style.transition = 'all 0.5s ease';
    console.log(position);
}
