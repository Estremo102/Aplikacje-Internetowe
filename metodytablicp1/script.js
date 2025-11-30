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
                    return true;
                }else{
                    return false;
                }
            } catch { return false; }
        },
        // Zadanie 2
        () => {
            try {
                if(typeof myPop === 'function'){
                    return true;
                }else{
                    return false;
                }
            } catch { return false; }
        },
        // Zadanie 3
        () => {
            try {
                if(typeof myShift === 'function' && typeof myUnshift === 'function'){
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