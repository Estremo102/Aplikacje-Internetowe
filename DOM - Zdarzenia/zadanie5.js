//rozwiązanie zadania 5 umieść wewnątrz tej funkcji
function zadanie5() {
}
zadanie5();


const target = document.querySelector('.shooting-target');
target.addEventListener('click', (e) => {
    const dpk = document.createElement('div');
    dpk.classList.add('dpk');
    dpk.style.top = `${e.pageY-25}px`;
    dpk.style.left = `${e.pageX-25}px`;
    document.body.appendChild(dpk);
}
);

    
// Kod do testów, nie usuwać
try{
    window.zadanie5 = zadanie5;
}catch{}