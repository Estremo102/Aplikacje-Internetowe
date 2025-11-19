//rozwiązanie zadania 3 umieść wewnątrz tej funkcji
function zadanie3() {
    const divs = document.querySelectorAll('.flex-container > div');
    for (let div of divs) {
        div.addEventListener('click', () => {
            div.style.backgroundColor = 'yellow';
        });
        div.addEventListener('dblclick', () => {
            div.style.backgroundColor = 'blue';
        });
    }
}
zadanie3();

// Kod do testów, nie usuwać
try{
    window.zadanie3 = zadanie3;
}catch{}