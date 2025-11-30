try{
    let z1s = document.querySelector('#z1s');
    if(window.zadanie1.toString().split('\n').length > 2)
        z1s.innerHTML = window.zadanie1.toString().split('\n').slice(1,-1).join('\n');
}catch{}

try{
    let z2s = document.querySelector('#z2s');
    if(window.zadanie2.toString().split('\n').length > 2)
        z2s.innerHTML = window.zadanie2.toString().split('\n').slice(1,-1).join('\n');
}catch{}

try{
    let z3s = document.querySelector('#z3s');
    if(window.zadanie3.toString().split('\n').length > 2)
        z3s.innerHTML = window.zadanie3.toString().split('\n').slice(1,-1).join('\n');
}catch{}

try{
    let z4s = document.querySelector('#z4s');
    if(window.zadanie4.toString().split('\n').length > 2)
        z4s.innerHTML = window.zadanie4.toString().split('\n').slice(1,-1).join('\n');
}catch{}

try{
    let z5s = document.querySelector('#z5s');
    if(window.zadanie5.toString().split('\n').length > 2)
        z5s.innerHTML = window.zadanie5.toString().split('\n').slice(1,-1).join('\n');
}catch{}

try{
    let z6s = document.querySelector('#z6s');
    if(window.zadanie6.toString().split('\n').length > 2)
        z6s.innerHTML = window.zadanie6.toString().split('\n').slice(1,-1).join('\n');

}catch{}

let code = document.querySelectorAll('pre code');
for (const block of code) {
    block.innerHTML = block.textContent
        .replace(/return/g, '<span class="pink">return</span>')
        .replace(/\/\/.*/g, (match) => `<span class="green">${match}</span>`)
        .replace(/\/\*[\s\S]*?\*\//g, (match) => `<span class="green">${match}</span>`)
        .replace(/function\s+([a-zA-Z_$][0-9a-zA-Z_$]*)/g, 'function <span class="blue">$1</span>')
        .replace(/function/g, '<span class="yellow">function</span>')
        .replace(/Math./g, '<span class="lightblue">Math</span>.')
        .replace('.pow', '.<span class="yellow">pow</span>')
        .replace(/for/g, '<span class="pink">for</span>')
        .replace(/if/g, '<span class="pink">if</span>')
        .replace(/const/g, '<span class="darkblue">const</span>')
        .replace(/let/g, '<span class="darkblue">let</span>')
        .replace(/var/g, '<span class="darkblue">var</span>');
}

window.onload = function() {
    const checks = [
        // Zadanie 1
        () => {
            try {
                if(typeof myPush === 'function'){
                    let test = [1, 2];
                    myPush(test, 3);
                    if (test.length != 3 ||
                        test[0] != 1 ||
                        test[1] != 2 ||
                        test[2] != 3 ) {
                        return false;
                    } 
                    if(myPush(test, 4, 5) != 5){
                        return false;
                    }
                    if(test.length !=5 ||
                        test[0] != 1 ||
                        test[1] != 2 ||
                        test[2] != 3 ||
                        test[3] != 4 ||
                        test [4] != 5
                    ) {
                        return false;
                    }
                    return true;
                } else {
                    return false;
                }
            } catch { return false; }
        },
        // Zadanie 2
        () => {
            try {
                if(typeof myPop === 'function'){
                    let test = [1, 2, 3, 4, 5];
                    let p = myPop(test);
                    return p == 5 && test.length == 4;
                }else{
                    return false;
                }
            } catch { return false; }
        },
        // Zadanie 3
        () => {
            try {
                if(typeof myShift === 'function' && typeof myUnshift === 'function'){
                    let test = [3, 4, 5];
                    if(myUnshift(test, 2) != 4){
                        return false;
                    }
                    if (
                        test[0] != 2 || 
                        test[1] != 3 ||
                        test[2] != 4 ||
                        test[3] != 5
                    ){
                        return false;
                    }
                    if(myUnshift(test, 0, 1) != 6){
                        return false;
                    }
                    if (
                        test[0] != 0 || 
                        test[1] != 1 ||
                        test[2] != 2 ||
                        test[3] != 3 ||
                        test[4] != 4 ||
                        test[5] != 5
                    ){
                        return false;
                    }
                    if(myShift(test) != 0 || test.length != 5){
                        return false;
                    }
                    if (
                        test[0] != 1 || 
                        test[1] != 2 ||
                        test[2] != 3 ||
                        test[3] != 4 ||
                        test[4] != 5
                    ){
                        return false;
                    }
                    return true;
                }else{
                    return false;
                }
            } catch { return false; }
        },
        // Zadanie 4
        () => {
            try {
                if(typeof myJoin === 'function'){
                    return true;
                }else{
                    return false;
                }
            } catch { return false; }
        },
        // Zadanie 5
        () => {
            try {
                if(typeof mySplit === 'function'){
                    return true;
                }else{
                    return false;
                }
            } catch { return false; }
        },
        // Zadanie 6
        () => {
            try {
                if(typeof myReverse === 'function'){
                    return true;
                }else{
                    return false;
                }
            } catch { return false; }
        }
    ];
    let correct = 0;
    const navLinks = document.querySelectorAll('nav ul li');
    checks.forEach((check, i) => {
        if (check()) {
            navLinks[i].classList.add('done');
            correct++;
        }
    });
    document.querySelector('aside div').innerHTML += `<br><br>Liczba poprawnie wykonanych zadań: ${correct} / 6`;
}