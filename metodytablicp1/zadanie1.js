//rozwiązanie zadania 1 umieść wewnątrz tej funkcji
function zadanie1() {
    window.myPush = function myPush(arr, ...elements){
        for (const element of elements) {
            arr[arr.length] = element;
        }
        return arr.length;
    }
}
zadanie1();

// Kod do testów, nie usuwać
try{
    window.zadanie1 = zadanie1;
}catch{}