 <?php
    echo '<script>let progress = [0, 0, 0, 0, 0, 0];</script>';
    $x = 98765.4321;
        include __DIR__ . '/../rozwiazania/zadanie1.php';
    if(!isset($x_converted)) {
        echo "Zmienna \$x_converted nie istnieje.";
    } else {
        if($x_converted == intval($x)) {
            echo $x_converted;
            echo "<Script>progress[0] = 1;</Script>";      
        } else {
            echo "Błąd konwersji.";
        }
    }
?> 