<?php
    include __DIR__ . '/../rozwiazania/zadanie6.php';
    echo '<Script> if(document.querySelector("#zadanie6 .solution-container").innerText.includes("Każdy człowiek jest pazerny i to jest to, a może się uda.") || document.querySelector("#zadanie6 .solution-container").innerText.includes("Ten kibel jest twój i mój!")) {
        progress[5] = 1;
    }
    </Script>'; 
    echo "<Script>
    let p = 0;
    for(let i = 0; i < progress.length; i++) {
        if(progress[i] === 1) {
            this.document.querySelectorAll('nav ul li')[i].classList.add('done');
            p++;
        }
    }
    this.document.querySelector('.navbox nav progress').value = p;
    </script>";
?>