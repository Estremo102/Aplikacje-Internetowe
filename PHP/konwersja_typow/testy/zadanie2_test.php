<?php
    $x = 98765.4321;
    $x_converted = null;
    include __DIR__ . '/../rozwiazania/zadanie2.php';
    if(!isset($x_converted)) {
        echo "Zmienna \$x_converted nie istnieje.";
    } else {
        if($x_converted == (int)$x) {
            echo $x_converted;
            echo "<Script>progress[1] = 1;</Script>";      
        } else {
            echo "Błąd konwersji.";
        }
    }
?>