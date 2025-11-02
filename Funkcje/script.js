try{
    let z1s = document.querySelector('#z1s');
    z1s.innerHTML = window.f.toString();
}catch{}

try{
    let z2s = document.querySelector('#z2s');
    z2s.innerHTML = window.dodaj.toString() + '\n\n' +
                    window.odejmij.toString();
}catch{}

try{
    let z3s = document.querySelector('#z3s');
    z3s.innerHTML = window.mnoz.toString();
}catch{}

try{
    let z4s = document.querySelector('#z4s');
    z4s.innerHTML = window.pierwiastkuj.toString();
}catch{}

let code = document.querySelectorAll('pre code');
code.forEach((block) => {
    block.innerHTML = block.textContent.replace(/return/g, '<span class="pink">return</span>')
    .replace(/\/\/.*/g, (match) => `<span class="green">${match}</span>`)
    .replace(/\/\*[\s\S]*?\*\//g, (match) => `<span class="green">${match}</span>`)
    .replace(/function\s+([a-zA-Z_$][0-9a-zA-Z_$]*)/g, 'function <span class="blue">$1</span>')
    .replace(/function/g, '<span class="yellow">function</span>')
    .replace(/Math./g, '<span class="lightblue">Math</span>.')
    .replace('.pow', '.<span class="yellow">pow</span>')
    .replace(/for/g, '<span class="pink">for</span>');
});

window.onload = function() {
    const checks = [
        // Zadanie 1
        () => {
            try {
                if (!window.f) return false;
                if (!typeof window.f === 'function') return false;
                if (window.f(4) !== 6) return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 2
        () => {
            try {
                if (!window.dodaj || !window.odejmij || !window.mnoz || !window.dziel) return false;
                if (typeof window.dodaj !== 'function') return false;
                if (window.dodaj(2,3) !== 5) return false;
                if (typeof window.odejmij !== 'function') return false;
                if (window.odejmij(5,2) !== 3) return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 3
        () => {
            try {
                if (!window.mnoz) return false;
                if (typeof window.mnoz !== 'function') return false;
                if (window.mnoz(2,3) !== 6) return false;
                if (window.mnoz(2,3,4) !== 24) return false;
                if (window.mnoz(1,2,3,4,5) !== 120) return false;
                if (window.mnoz() !== 1 ) return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 4
        () => {
            try {
                if (!window.pierwiastkuj) return false;
                if (typeof window.pierwiastkuj !== 'function') return false;
                if (window.pierwiastkuj(9) !== 3) return false;
                if (window.pierwiastkuj(27, 3) !== 3) return false;
                return true;
            } catch { return false; }
        }
    ];

    const navLinks = document.querySelectorAll('nav ul li');
    checks.forEach((check, i) => {
        if (check()) {
            navLinks[i].classList.add('done');
        }
    });
}