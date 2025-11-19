//rozwiązanie zadania 6 umieść wewnątrz tej funkcji
function zadanie6() {
    function onMouseMove(e) {
        box.style.left = `${e.pageX - box.offsetWidth / 2}px`;
        box.style.top = `${e.pageY - box.offsetHeight / 2}px`;
    }
    const box = document.querySelector('.movable');
    box.addEventListener('mousedown', () => {
        window.addEventListener('mousemove', onMouseMove);
    });
    window.addEventListener('mouseup', () => {
        window.removeEventListener('mousemove', onMouseMove);
    });
}
zadanie6();

// Kod do testów, nie usuwać
try{
    window.zadanie6 = zadanie6;
}catch{}