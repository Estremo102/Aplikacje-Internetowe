content = document.getElementById("content");
// for(let i = 0; i++ < 20;){
//     if(i%3==0) {
//         continue;
//     }
//     content.innerHTML += `Pętle w js, Jest to ${i + 20} obieg pętli <br>`;
// }
// let i = 0;
// while(i < 10){
//     i++;
//     content.innerHTML += "Pętle w js, Jest to "+ i +" obieg pętli <br>";
// }

// for(;;){
//     content.innerHTML += "Pętle w js, Jest to "+ ++i +" obieg pętli <br>";
//     if(i >= 10){
//         break;
//     }
// }
// let x;
// do {
//     x = Number.parseInt(window.prompt("Podaj liczbę"));
// }while(Number.isNaN(x))

// const samochody = ["Audi", "BMW", "Citroën", "Dacia", "Fiat", "Ford", "Honda", "Hyundai", "Jaguar", "Kia", "Lexus", "Mercedes-Benz", "Mini", "Nissan", "Opel", "Peugeot", "Porsche", "Renault", "Skoda", "Toyota", "Volkswagen", "Volvo"];


const samochody = [];
let x;
do {
    x = Number.parseInt(window.prompt("Podaj liczbę"));
}while(Number.isNaN(x))

for(let i = 0; i < x; i++){
    samochody[i] = window.prompt("Podaj samochod");
}

for(const samochod of samochody){
    content.innerHTML += `Samochód ${samochod} ma ${samochod.length} liter<br>`;
}

