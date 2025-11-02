try{
    let z1s = document.querySelector('#z1s');
    z1s.innerHTML = window.f.toString();
}catch{}

let code = document.querySelectorAll('pre code');
code.forEach((block) => {
    block.innerHTML = block.textContent.replace(/return/g, '<span class="pink">return</span>')
    .replace(/\/\/.*/g, (match) => `<span class="green">${match}</span>`)
    .replace(/\/\*[\s\S]*?\*\//g, (match) => `<span class="green">${match}</span>`)
    .replace(/function\s+([a-zA-Z_$][0-9a-zA-Z_$]*)/g, 'function <span class="blue">$1</span>')
    .replace(/function/g, '<span class="yellow">function</span>')
    .replace(/Math./g, '<span class="lightblue">Math</span>.')
    .replace(/.pow/g, '.<span class="yellow">pow</span>');
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
        }
    ];

    const navLinks = document.querySelectorAll('nav ul li');
    checks.forEach((check, i) => {
        if (check()) {
            navLinks[i].classList.add('done');
        }
    });
}