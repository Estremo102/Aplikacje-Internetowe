//rozwiązanie zadania 3 umieść wewnątrz tej funkcji
function zadanie3() {
    window.myUnshift = (arr, ...el) => {
        for(let i = arr.length-1; i >= 0; i--) {
            arr[i + el.length] = arr[i];
        }
        for(let i = 0; i < el.length; i++){
            arr[i] = el[i];
        }
        return arr.length;
    }
    window.myShift = (arr) => {
        let r = arr[0];
        for(let i = 0; i < arr.length-1; i++) {
            arr[i] = arr[i+1];
        }
        arr.length--;
        return r;
    }
}
zadanie3();

// Kod do testów, nie usuwać
try{
    window.zadanie3 = zadanie3;
}catch{}