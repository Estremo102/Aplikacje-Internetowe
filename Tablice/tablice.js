const tablica = [];

for(let i = 0; i < 100; i++){
    // tablica.push(Math.floor(Math.random()*100));
    tablica[i] = (Math.floor(Math.random()*100));
}

function InsertionSort(array){
    for(let i = 1; i < array.length; i++){
        let j = i-1;
        while(j >=0)
        {
            if(array[j+1] < array[j]){
                let temp = array[j+1];
                array[j+1] = array[j];
                array[j] = temp;
            }else{
                break;
            }
            j--;
        }
    }
}

//Zadanie:
function BubbleSort(array){
    //Zaimplementuj sortowanie bąbelkowe
}