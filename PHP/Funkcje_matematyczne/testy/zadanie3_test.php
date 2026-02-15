<?php
    $user_a = 76;
    $user_b = 9;
    include __DIR__ . '/../rozwiazania/zadanie3.php';
    if(isset($roznica_wieku)){
        echo $roznica_wieku;
        if(abs($user_a - $user_b) == $roznica_wieku) {
            $user_a = 21;
            $user_b = 37;
            include __DIR__ . '/../rozwiazania/zadanie3.php';
            if(abs($user_a - $user_b) != $roznica_wieku) {
                echo 'funkcja abs() nie została użyta';
            }
        } else {
            echo 'Wynik niepoprawny, upewnij się, że funkcja abs() została użyta';
        }
    } else {
        echo 'Nie utworzono zmiennej $roznica_wieku';
    }; 
    echo '<Script> if(document.querySelector("#zadanie3 .solution-container").innerText === "67") {
        progress[2] = 1;
    }
    </Script>';
?>