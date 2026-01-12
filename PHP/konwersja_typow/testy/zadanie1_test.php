 <?php
    $progress = 0;
    $x = 98765.4321;
        include __DIR__ . '/../rozwiazania/zadanie1.php';
    if(!isset($x_converted)) {
        echo "Zmienna \$x_converted nie istnieje.";
    } else {
        if($x_converted == intval($x)) {
            echo $x_converted;
            $progress++;
            echo "<Script>this.document.querySelectorAll('nav ul li')[0].classList.add('done');</Script>";      
        } else {
            echo "Błąd konwersji.";
        }
    }
?> 