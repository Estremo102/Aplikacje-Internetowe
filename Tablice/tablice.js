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

function BubbleSort(array){
    for(let i = 0; i < array.length - 1; i++){
        for(let j = 0; j < array.length - 1 - i; j++){
            if(array[j] > array[j+1])
            {
                let temp = array[j];
                array[j] = array[j+1];
                array[j+1] = temp;
            }
        }
    }
}

function compare(a, b){
    if(a < b){
        return -1;
    }
    if(a > b){
        return 1;
    }
    return 0;
}

function compare2(a, b){
    return a < b ? -1 : a > b ? 1 : 0;
}

function compare3(a, b){
    return a - b;
}

tablica.sort((a, b) => a - b);

function compareString(a, b){
    return a.localeCompare(b, "pl", {sinsitivity : "base"});
}

function compareModulo(a, b){
    if(a%2 == b%2){
        if(a%2==0)
        {
            return a-b;
        }
        return b-a;
    }
    if(a%2==0){
        return 1;
    }
    return -1;
}

function Saper(arr){
    if(!Array.isArray(arr)) return false;
    if(!arr.every(el => Array.isArray(el))) return false;
    const result = [];
    for(let i = 0; i < arr.length; i++){
        result[i] = [];
        result[i].length = arr[i].length;
        result[i].fill(0);
    }

    for(let i = 0; i < arr.length; i++){
        for(let j = 0; j < arr[i].length; j++){
            if(arr[i][j]){
                result[i][j] = 'X';
                for(let a = -1; a < 2; a++){
                    for(let b = -1; b < 2; b++){
                        try{
                            if(typeof result[i + a][j + b] === "number"){
                                result[i + a][j + b]++;
                            }
                        } catch{}
                    }
                }
            }
        }
    }
    return result;
}
