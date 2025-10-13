// x = 5;
// window.alert(x);
// console.log(x);
// document.write(x);

let x; //standardowa zmienna
var y; //niezalecane
const z = ''; // wartość nie może być zmieniona w trakcie wykonywania programu

x = 7.5;
// window.alert(typeof x);

x += '0.5';
y = 3;
y++; //4
// window.alert("preinkrementacja: " + y++ + "\npostinkrementacja: " + ++y) //6

x = y--; //x = 6; y = 5;
x = --y; //x = 4; y = 4;

y += 6; // y = 10;
//y++        y+=1        y = y + 1

// let zwierze = window.prompt("Podaj zwierze");
let zwierze = "kot";
let poprawneZwierze = false;
do{
    poprawneZwierze = true;
    switch(zwierze.toLowerCase()){
        case "pies":
            window.alert("Psy ziewają z radości");
            break;
        case "kot":
            window.alert("trikolorki to zawsze kotki, pomarańczowe to przeważnie kocury");
            break;
        default:
            window.alert("nieznane zwierze");
            zwierze = window.prompt("Podaj zwierze");
            poprawneZwierze = false;
            break;
    }
}while(!poprawneZwierze);

if(5 < 2){
    zwierze = "żaba";
}else{
    x = (5 == 5 || 5 < 2); //true
    y = (5 == 5 && 5 < 2); //false
}
x = '';
for(let i = 0; i <= zwierze.length; i++){
    x += i;
}

zwierze = 'Kot';
zwierze = "kot";
let zwierzęta = `Koty i psy
${x}`;

x = zwierzęta[5];

function ileLiter(a){
    return a.length;
}

const owoce = ["Jabłko", "Banan", "Wiśnia"]
for(let i = 0; i < owoce.length; i++){
    x = owoce[i];
    if(i == 1){
        break;
    }
}

const warzywa = new Array("Marchewka", "Burak", "Cukinia");
warzywa[1];

const tablica = []
for(let i = 0; i < 100; i++){
    tablica.push(Math.floor(Math.random()*100));
}

function Compare(a, b){
    return a-b;
}

tablica.sort(Compare);

x = '';
let i = 15;
do{
    x += "liczba wynosi " + i;
}while(i < 10)