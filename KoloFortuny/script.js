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
        // if(i==random){
        //     lista.innerHTML += `<li><div class="wylosowanyUczen">${uczniowie[i]}</div></li>`;
        // }else{
            lista.innerHTML += `<li><div class="uczen">${uczniowie[i]}</div></li>`;
        // }
    }
}

function Losuj(){
    Wyswielt();
    let uczniowie = document.getElementsByClassName("uczen");
    let random = Math.floor(Math.random()*uczniowie.length);
    for(let i = 0; i < uczniowie.length; i++){
        if(i==random){
            uczniowie[i].className = "wylosowanyUczen";
        }
    }
}

// lista.innerHTML = "<li>" + uczniowie.join("</li><li>") + "</li>";

