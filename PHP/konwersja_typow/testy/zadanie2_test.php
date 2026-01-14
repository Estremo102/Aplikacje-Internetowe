<?php
    $x = 98765.4321;
    $x_converted = null;
    include __DIR__ . '/../rozwiazania/zadanie2.php';
    if(!isset($x_converted)) {
        echo "Zmienna \$x_converted nie istnieje.";
    } else {
        if($x_converted == (int)$x) {
            echo $x_converted;
            $progress++;
            echo "<Script>this.document.querySelectorAll('nav ul li')[1].classList.add('done');</Script>";      
        } else {
            echo "Błąd konwersji.";
        }
    }
?>