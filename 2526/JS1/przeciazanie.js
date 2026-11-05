function Pierwiastkuj(a, b = 2){
    return Math.pow(a, 1/ b);
}

function Witaj(imie, tytul){
    if(arguments.length == 1){
        window.alert(`Cześć ${imie}`);
    } else {
        window.alert(`Dzien dobry ${tytul} ${imie}`)
    }
}