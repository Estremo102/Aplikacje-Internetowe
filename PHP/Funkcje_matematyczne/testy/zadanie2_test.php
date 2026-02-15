<?php
    $tablica = [32, 25, 21, 22, 28, 37, 35, 33];
    include __DIR__ . '/../rozwiazania/zadanie2.php';
    echo '<Script>
            if(document.querySelector("#zadanie2 .solution-container").innerText.replaceAll("\\n", "").replaceAll(" ", "") === "2137") {
                progress[1] = 1;
            }
        </Script>'; 
?>