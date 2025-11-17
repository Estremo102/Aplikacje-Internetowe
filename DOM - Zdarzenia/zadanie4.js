//rozwiązanie zadania 4 umieść wewnątrz tej funkcji
function zadanie4() {
}
zadanie4();

const input = document.querySelector("#keyTestEvent")
const div = document.querySelector("#keyTestEventShow");

input.addEventListener("keydown", e => {
    div.innerHTML = `
        e.key: <b>${e.key}</b><br>
        e.code: <b>${e.code}</b><br>
        e.keyCode: <b>${e.keyCode}</b>
    `;
});

// Kod do testów, nie usuwać
try{
    window.zadanie4 = zadanie4;
}catch{}