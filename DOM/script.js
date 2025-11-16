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
                const btn = document.querySelector('.myBtn');
                if (!btn) return false;
                btn.textContent = 'Kliknij mnie';
                btn.click();
                if (btn.textContent !== 'Kliknięto') {
                    btn.textContent = 'Kliknij mnie';
                    return false;
                }
                btn.textContent = 'Kliknij mnie';
                return true;
            } catch { return false; }
        },
        // Zadanie 2
        () => {
            let btn;
            let original;
            try {
                btn = document.querySelector('#zadanie2 button');
                if (!btn) return false;
                original = btn.textContent;
                btn.textContent = 'Licznik Kliknięć: 0';
                for (let i = 0; i < 5; i++) btn.click();
                if (!/Licznik Kliknięć:\s*5/.test(btn.textContent)) return false;
                const before = btn.textContent;
                btn.click();
                if (btn.textContent !== before) return false;
                return true;
            } catch { return false; } finally {
                try {
                    if (btn && typeof original !== 'undefined') btn.textContent = original;
                    zadanie2();
                } catch {}
            }
        },
        // Zadanie 3
        () => {
            let div1, div2;
            let originalBg1, originalBg2;
            try {
                const divs = document.querySelectorAll('.flex-container > div');
                if (divs.length < 2) return false;
                div1 = divs[0];
                div2 = divs[1];
                originalBg1 = div1.style.backgroundColor;
                originalBg2 = div2.style.backgroundColor;
                div1.style.backgroundColor = 'white';
                div2.style.backgroundColor = 'white';
                div1.click();
                if (div1.style.backgroundColor !== 'yellow') return false;
                div2.dispatchEvent(new MouseEvent('dblclick', { bubbles: true }));
                if (div2.style.backgroundColor !== 'blue') return false;
                return true;
            } catch { return false; } finally {
                try {
                    if (div1 && typeof originalBg1 !== 'undefined') div1.style.backgroundColor = originalBg1;
                    if (div2 && typeof originalBg2 !== 'undefined') div2.style.backgroundColor = originalBg2;
                } catch {}
            }
        },
        // Zadanie 4
        () => {
            try {
                const d = document.querySelector("#RGB");
                const originalBg = d.style.backgroundColor;
                const eventR = new KeyboardEvent('keydown', { key: 'r' });
                window.dispatchEvent(eventR);
                if (d.style.backgroundColor !== 'red') {
                    d.style.backgroundColor = originalBg;
                    return false;
                }
                const eventG = new KeyboardEvent('keydown', { key: 'g' });
                window.dispatchEvent(eventG);
                if (d.style.backgroundColor !== 'green') {
                    d.style.backgroundColor = originalBg;
                    return false;
                }
                const eventB = new KeyboardEvent('keydown', { key: 'b' });
                window.dispatchEvent(eventB);
                if (d.style.backgroundColor !== 'blue') {
                    d.style.backgroundColor = originalBg;
                    return false;
                }
                d.style.backgroundColor = originalBg;
                return true;
            } catch { return false; }
        },
        // Zadanie 5
        () => {
            try {

                return true;
            } catch { return false; }
        },
        // Zadanie 6
        () => {
            try {
                return true;
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