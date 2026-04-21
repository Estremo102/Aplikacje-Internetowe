//tablica z uczniami
//  -wprowadzanie danych
//  -tworzenie tablicy
//  -wyświetlanie elementów
//Math.Random()

// let prompt = window.prompt("Wprowadź uczniów oddzielonych za pomocą średników")
// const uczniowie = prompt.split(';');
// const lista = document.getElementById('lista');
// Wyswielt();

function generujKolo() {
    const koloFortuny = document.querySelector('#koloFortuny');
    const ctx = koloFortuny.getContext('2d');
    const input = document.getElementById('itemsInput');
    const items = input.value.split(';').filter(item => item.trim() !== '');

    if (items.length === 0) {
        alert("Proszę wprowadzić dane do losowania.");
        return;
    }

    const centerX = koloFortuny.width / 2;
    const centerY = koloFortuny.height / 2;
    const radius = 180;
    const angle = (2 * Math.PI) / items.length;

    ctx.clearRect(0, 0, koloFortuny.width, koloFortuny.height);

    for (let i = 0; i < items.length; i++) { 
        const startAngle = i * angle;
        const endAngle = startAngle + angle;

        ctx.beginPath();
        ctx.moveTo(centerX, centerY);
        ctx.arc(centerX, centerY, radius, startAngle, endAngle);
        ctx.fillStyle = `hsl(${(i * 360) / items.length}, 70%, 60%)`;
        ctx.fill();
        ctx.stroke();

        ctx.save();
        ctx.translate(centerX, centerY);
        ctx.rotate((startAngle + endAngle) / 2);
        ctx.textAlign = "right";
        ctx.fillStyle = "white";
        ctx.font = "bold 16px Arial";
        ctx.fillText(items[i], radius - 20, 0);
        ctx.restore();
    }
    const randomDeg = Math.floor(Math.random() * 720) + 2000;
    koloFortuny.style.setProperty('--random-rotate', `${randomDeg}deg`);
}

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

function WprowadzIloscPiorunow(){
    Losuj(window.prompt("Podaj ilość piorunów"));
}