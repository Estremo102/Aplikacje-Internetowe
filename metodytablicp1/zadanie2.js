//rozwiązanie zadania 2 umieść wewnątrz tej funkcji
function zadanie2() {
    window.myPop = function myPop(arr) {
        let r = arr[arr.length-1];
        arr.length--;
        return r;
    }
}
zadanie2();

// Kod do testów, nie usuwać
try{
    window.zadanie2 = zadanie2;
}catch{}