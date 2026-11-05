let params = new URLSearchParams(location.search);
if(params.get('a') != null && params.get('b') != null && params.get != null) {
    let a = params.get('a');
    let b = params.get('b');
    let c = params.get('c');
    
    if(a == "" || a == 0) {         // sprawdzamy poprawność danych
        document.querySelector("#rownanie").innerHTML = "To nie jest równanie kwadratowe";
    } else {
        b = b == "" ? 0 : b;        // podmieniamy puste b na 0 za pomocą operatora trójargumentowego
        if(c == "") c = 0;          // podmieniamy puste c na 0 za pomocą if
        //Zapisujemy równanie
        document.querySelector("#rownanie").innerHTML = `${a}x<sup>2</sup> + ${b}x + ${c} = 0`;
        let ac4 = -4*a*c;
        let delta = b**2+ac4;
        document.querySelector("#delta").innerHTML = `&Delta; = ${b}<sup>2</sup> -4*${a}*${c} =
        ${b}<sup>2</sup> ${ac4 < 0 ? `${ac4}` : `+${ac4} `}
        = ${delta}`;
        
        if(delta < 0) {
            document.querySelector("#wynik").innerHTML = "Brak rozwiązań w zbiorze liczb rzeczywistych";
        } else {
            let sqrtDelta = Math.sqrt(delta);
            document.querySelector("#delta").innerHTML += `<br> 
            &radic;&Delta; = ${sqrtDelta}`;
            if(delta == 0) {
                document.querySelector("#x1").innerHTML = `x<sub>0</sub> = -b / 2a =
                ${-b} / ${2 * a} = ${-b/(2*a)}`;
            } else {
                document.querySelector("#x1").innerHTML = `x<sub>1</sub> = -b - &radic;&Delta; / 2a =
                ${-b} - ${sqrtDelta} / ${2*a} = 
                ${(-b - sqrtDelta)/(2 * a)}`;
                document.querySelector("#x2").innerHTML = `x<sub>2</sub> = -b + &radic;&Delta; / 2a =
                ${-b} + ${sqrtDelta} / ${2*a} = 
                ${(-b + sqrtDelta)/(2 * a)}`;
            }
        }         
    }
} else {
    window.alert("Witaj w programie do rozwiązywania równań kwadratowych");
}