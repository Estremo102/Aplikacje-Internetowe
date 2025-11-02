try{
    let z1s = document.querySelector('#z1s');
    z1s.innerHTML = window.f.toString();
}catch{}

try{
    let z2s = document.querySelector('#z2s');
    z2s.innerHTML = window.dodaj.toString() + '\n\n' +
                    window.odejmij.toString();
}catch{}

let code = document.querySelectorAll('pre code');
code.forEach((block) => {
    block.innerHTML = block.textContent.replace(/return/g, '<span class="pink">return</span>')
    .replace(/\/\/.*/g, (match) => `<span class="green">${match}</span>`)
    .replace(/\/\*[\s\S]*?\*\//g, (match) => `<span class="green">${match}</span>`)
    .replace(/function\s+([a-zA-Z_$][0-9a-zA-Z_$]*)/g, 'function <span class="blue">$1</span>')
    .replace(/function/g, '<span class="yellow">function</span>')
    .replace(/Math./g, '<span class="lightblue">Math</span>.')
    .replace('.pow', '.<span class="yellow">pow</span>');
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
        }
    ];

    const navLinks = document.querySelectorAll('nav ul li');
    checks.forEach((check, i) => {
        if (check()) {
            navLinks[i].classList.add('done');
        }
    });
}