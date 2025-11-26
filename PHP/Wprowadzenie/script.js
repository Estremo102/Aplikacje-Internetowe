let code = document.querySelectorAll('pre code');
for (const block of code) {
    block.innerHTML = block.textContent
        .replace(/"([^"]*)"/g, '<span class="orange">"$1"</span>')
        .replace("<?php", '<span class="blue">&lt?php</span>')
        .replace("?>", '<span class="blue">?&gt</span>')
        .replace("echo", '<span class="yellow">echo</span>')
        .replace(/#.*$/gm, '<span class="green">$&</span>')
        .replace(/\/\/.*$/gm, '<span class="green">$&</span>')
        .replace(/\/\*[\s\S]*?\*\//gm, '<span class="green">$&</span>')
        .replace(/\d+/g, '<span class="lightgreen">$&</span>')
        .replace(/\$[a-zA-Z_][a-zA-Z0-9_]*/g, '<span class="lightblue">$&</span>')
        .replace(/<br>/g, "&ltbr&gt");
}

window.onload = function() {
    const checks = [
        // Zadanie 1
        () => {
            try {
                let solution = document.querySelector('#zadanie1 .solution-container').innerText;
                return solution.trim() === "Hello world!";
            } catch { return false; }
        },
        // Zadanie 2
        () => {
            try {
                let solution = document.querySelector('#zadanie2 .solution-container').innerText;
                return solution.trim() === "21 = 3 • 7";
            } catch { return false; }
        },
        // Zadanie 3
        () => {
            try {
                let solution = document.querySelector('#zadanie3 .solution-container').innerText;
                return solution.includes("20 2");
            } catch { return false; }
        },
        // Zadanie 4
        () => {
            try {
                let solution = document.querySelector('#zadanie4 .solution-container').innerText;
                return solution.trim() === 'array(5) { [0]=> int(5) [1]=> string(4) "John" [2]=> float(3.14) [3]=> bool(false) [4]=> NULL }';
            } catch { return false; }
        },
        // Zadanie 5
        () => {
            try {
                return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 6
        () => {
            try {
                return false;
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