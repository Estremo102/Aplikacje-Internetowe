//rozwiązanie zadania 1 umieść wewnątrz tej funkcji
function zadanie1() {
    const button = document.querySelector(".myBtn");
    button.addEventListener('click', () => {
        button.innerHTML = "Kliknięto";
    });
}
zadanie1();

// Kod do testów, nie usuwać
try{
    window.zadanie1 = zadanie1;
}catch{}