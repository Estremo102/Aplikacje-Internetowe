//rozwiązanie zadania 5 umieść wewnątrz tej funkcji
function zadanie5() {
    const div = document.querySelector('.click-coordinates');
    div.addEventListener('click', (e) => {
        div.innerHTML = `Kliknięto w punkcie: (${e.offsetX}, ${e.offsetY})`;
    });
}
zadanie5();


const target = document.querySelector('.shooting-target');
target.addEventListener('click', (e) => {
    const dpk = document.createElement('div');
    dpk.classList.add('dpk');
    dpk.style.top = `${e.pageY-25}px`;
    dpk.style.left = `${e.pageX-25}px`;
    let distance = Math.sqrt(Math.pow(1000-e.pageX, 2) + Math.pow(4444-e.pageY, 2));
    // window.alert(distance.toFixed(2));
    if (distance <= 84) {
        window.alert("Trafiono w żółty");
    } else if (distance <= 185) {
        window.alert("Trafiono w czerwony");
    } else if (distance <= 280) {
        window.alert("Trafiono w niebieski");
    } else if (distance <= 380) {
        window.alert("Trafiono w czarny");
    } else if (distance <= 477) {
        window.alert("Trafiono w biały");
    } else {
        window.alert("Pudło");
    }
    document.body.appendChild(dpk);
}
);

    
// Kod do testów, nie usuwać
try{
    window.zadanie5 = zadanie5;
}catch{}