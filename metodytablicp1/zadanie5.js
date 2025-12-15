//rozwiązanie zadania 5 umieść wewnątrz tej funkcji
function zadanie5() {
    window.mySplit = (arr, c) => {
        let j = 0;
        let r = [''];
        for(let i = 0; i < arr.length; i++){
            if(arr[i] == c)
            {
                j++;
                r[j] = '';
            }else{
                r[j] += arr[i];
            }
        }
        return r;
    }
}
zadanie5();
    
// Kod do testów, nie usuwać
try{
    window.zadanie5 = zadanie5;
}catch{}