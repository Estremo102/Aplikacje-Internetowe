//tablica z uczniami
//  -wprowadzanie danych
//  -tworzenie tablicy
//  -wyświetlanie elementów
//Math.Random()

let prompt = window.prompt("Wprowadź uczniów oddzielonych za pomocą średników")
const uczniowie = prompt.split(';');
let random = Math.floor(Math.random()*uczniowie.length);
const lista = document.getElementById('lista');
for(let i = 0; i < uczniowie.length; i++){
    if(i==random){
        lista.innerHTML += `<li style='color: #F00>${uczniowie[i]}</li>`;
    }else{
        lista.innerHTML += `<li>${uczniowie[i]}</li>`;
    }
}

// lista.innerHTML = "<li>" + uczniowie.join("</li><li>") + "</li>";

