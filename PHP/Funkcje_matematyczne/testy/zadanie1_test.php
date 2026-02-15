 <?php
    echo '<script>let progress = [0, 0, 0, 0, 0, 0];</script>';
    include __DIR__ . '/../rozwiazania/zadanie1.php';
    echo '<Script>
        if(document.querySelector("#zadanie1 .solution-container").innerText === "pole koła o promieniu 5 wynosi 78.539816339745") {
            progress[0] = 1;
        }
    </Script>'; 
?> 