//rozwiązanie zadania 2 umieść wewnątrz tej funkcji
function zadanie2() {
    const button = document.querySelector("button");
    let count = 0;
    button.addEventListener('click', function licznik() {
        button.innerHTML = `Licznik Kliknięć: ${++count}`;
        if(count >= 5) {
            button.removeEventListener('click', licznik);
        }
    });
}
zadanie2();

// Kod do testów, nie usuwać
try{
    window.zadanie2 = zadanie2;
}catch{}