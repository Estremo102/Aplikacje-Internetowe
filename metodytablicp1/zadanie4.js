//rozwiązanie zadania 4 umieść wewnątrz tej funkcji
function zadanie4() {
    window.myJoin = (arr, arg = ',') => {
        let r = '';
        for(let i = 0; i < arr.length - 1; i++){
            r += arr[i] + arg;
        }
        r += arr[arr.length-1];
        return r;
    }
}
zadanie4();

// Kod do testów, nie usuwać
try{
    window.zadanie4 = zadanie4;
}catch{}