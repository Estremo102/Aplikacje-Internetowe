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
                    // Zadanie 1 - myPush
                    if (typeof window.myPush !== 'function') return false;
                    const arr = [1, 2];
                    const res = window.myPush(arr, 3, 4);
                    if (!Array.isArray(arr)) return false;
                    if (arr.length !== 4) return false;
                    if (arr[2] !== 3 || arr[3] !== 4) return false;
                    if (res !== 4) return false;
                    return true;
            } catch { return false; }
        },
        // Zadanie 2
        () => {
            try {
                    // Zadanie 2 - myPop
                    if (typeof window.myPop !== 'function') return false;
                    const arr = [1, 2, 3];
                    const last = window.myPop(arr);
                    if (last !== 3) return false;
                    if (arr.length !== 2) return false;
                    if (arr[0] !== 1 || arr[1] !== 2) return false;
                    return true;
            } catch { return false; }
        },
        // Zadanie 3
        () => {
            try {
                    // Zadanie 3 - myShift / myUnshift
                    if (typeof window.myShift !== 'function') return false;
                    if (typeof window.myUnshift !== 'function') return false;
                    const a = [2, 3, 4];
                    const len = window.myUnshift(a, 0, 1);
                    if (a[0] !== 0 || a[1] !== 1) return false;
                    if (a.length !== len) return false;
                    const first = window.myShift(a);
                    if (first !== 0) return false;
                    if (a[0] !== 1) return false;
                    return true;
            } catch { return false; }
        },
        // Zadanie 4
        () => {
            try {
                    // Zadanie 4 - myJoin
                    if (typeof window.myJoin !== 'function') return false;
                    const arr = ['a', 'b', 'c'];
                    const s1 = window.myJoin(arr, ' - ');
                    if (s1 !== 'a - b - c') return false;
                    const s2 = window.myJoin(arr);
                    if (s2 !== 'a,b,c') return false;
                    return true;
            } catch { return false; }
        },
        // Zadanie 5
        () => {
            try {
                    // Zadanie 5 - mySplit
                    if (typeof window.mySplit !== 'function') return false;
                    const txt = 'Ala ma kota';
                    const parts = window.mySplit(txt, ' ');
                    if (!Array.isArray(parts)) return false;
                    if (parts.length !== 3) return false;
                    if (parts[0] !== 'Ala' || parts[1] !== 'ma' || parts[2] !== 'kota') return false;
                    const chars = window.mySplit('ziem', '');
                    if (!Array.isArray(chars)) return false;
                    if (chars.join('') !== 'ziem') return false;
                    return true;
            } catch { return false; }
        },
        // Zadanie 6
        () => {
            try {
                    // Zadanie 6 - myReverse
                    if (typeof window.myReverse !== 'function') return false;
                    const arr = [1, 2, 3, 4];
                    const ret = window.myReverse(arr);
                    if (arr.length !== 4) return false;
                    if (arr[0] !== 4 || arr[1] !== 3 || arr[2] !== 2 || arr[3] !== 1) return false;
                    if (ret && Array.isArray(ret) && ret[0] !== 4) return false;
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