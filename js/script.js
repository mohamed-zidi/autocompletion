
const songs = [];

fetch('./php/traitement.php')

    .then(blob => blob.json())
    .then(data => songs.push(...data))
    
function findSong(search, songs){
   

    return songs.filter(song => {
        
        const regex = new RegExp(search, 'gi')
        return song.name.match(regex)
    });
}

function showResult(){

    const tab = findSong(this.value, songs);
    const html = tab.map(song => {

        return `
        <a href="element.php?id=${song.id}"><li><span>${song.name}</span> <span>${song.artist}</span> </li></a>
        `;
    }).join('');
    results.innerHTML = html;
   // console.log(tab);
}

let input = document.querySelector('.input');
let results = document.querySelector('ul');
console.log(input)
input.addEventListener('keyup',showResult)
