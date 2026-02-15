<?php
    $a = 3;
    $b = 4;
    include __DIR__ . '/../rozwiazania/zadanie4.php';
    if(isset($c)) {
        if($c == 5) {
            echo 'Dla trójkąta a = 3, b = 4 podano prawidłowy wynik c = ' . $c; 
            $a = 8;
            $b = 15;
            include __DIR__ . '/../rozwiazania/zadanie4.php';
            if($c == 17) {
                echo '<br>Dla trójkąta a = 8, b = 15 podano prawidłowy wynik c = ' . $c; 
                echo "<Script>progress[3] = 1;</Script>"; 
            } else {
                echo '<br>Dla trójkąta a = 8, b = 15 podano nieprawidłowy wynik c = ' . $c; 
            }
        } else {
            echo 'Dla trójkąta a = 3, b = 4 podano nieprawidłowy wynik c = ' . $c; 
        }
    }
?>