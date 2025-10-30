//tablica z uczniami
//  -wprowadzanie danych
//  -tworzenie tablicy
//  -wyświetlanie elementów
//Math.Random()

let prompt = window.prompt("Wprowadź uczniów oddzielonych za pomocą średników")
const uczniowie = prompt.split(';');
const lista = document.getElementById('lista');
Wyswielt();

function Wyswielt()
{
    lista.innerHTML = "";
    for(let i = 0; i < uczniowie.length; i++){
        lista.innerHTML += `<li><div class="uczen">${uczniowie[i]}</div></li>`;
    }
}

function Losuj(strikes){
    Wyswielt();
    let uczniowie = document.querySelectorAll("#lista .uczen");
    let random;
    if(arguments.length == 0){
        random = Math.floor(Math.random()*uczniowie.length);
    }else{
        random = strikes%uczniowie.length;
    }
    uczniowie[random].id = "wylosowanyUczen";
}

