let code = document.querySelectorAll('pre code');
for (const block of code) {
    block.innerHTML = block.textContent
        .replace(/"([^"]*)"/g, '<span class="orange">"$1"</span>')
        .replace("<?php", '<span class="blue">&lt?php</span>')
        .replace("?>", '<span class="blue">?&gt</span>')
        .replace("echo", '<span class="yellow">echo</span>');
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
                return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 3
        () => {
            try {
                return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 4
        () => {
            try {
                return false;
                return true;
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