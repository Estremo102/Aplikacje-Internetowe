//rozwiązanie zadania 6 umieść wewnątrz tej funkcji
function zadanie6() {
    window.myReverse = (arr) => {
        for(let i = 0; i < arr.length/2; i++){
            let tmp = arr[i];
            arr[i] = arr[arr.length-i-1];
            arr[arr.length-i-1] = tmp;
        }
        // let old = [...arr];
        // for(let i = 0; i < arr.length; i++){
        //     arr[i] = old[old.length-i-1];
        // }
    }
}
zadanie6();

// Kod do testów, nie usuwać
try{
    window.zadanie6 = zadanie6;
}catch{}