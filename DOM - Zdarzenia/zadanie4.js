//rozwiązanie zadania 4 umieść wewnątrz tej funkcji
function zadanie4() {
    const rgb = document.querySelector("#RGB");
    window.addEventListener("keydown", e => {
        if(e.key === "r") {
            rgb.style.backgroundColor = "red";
        }
        else if(e.key === "g") {
            rgb.style.backgroundColor = "green";
        }
        else if(e.key === "b") {
            rgb.style.backgroundColor = "blue";
        }
        // else if(e.code === "KeyG") {
        //     rgb.style.backgroundColor = "green";
        // }
        // else if(e.keyCode === 66) {
        //     rgb.style.backgroundColor = "blue";
        // }
    });
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