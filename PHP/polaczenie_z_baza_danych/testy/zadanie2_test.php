<?php 
    include __DIR__.'/../zadanie2.php';
    $correct = true;
    if (!isset($conn)) {
        $correct = false;
        echo 'Nie nawiązano połączenia, upewnij się, że używasz zmiennej $conn (nie jest to wymóg języka, lecz testów sprawdzających poprawność wykonania zadania)';
    }
    else if ($conn->errorCode() == '00000') {
        echo "Połączenie poprawne";
    } else {
        echo "Błąd połączenia: " . implode(", ", $conn->errorInfo());
        $correct = false;
    }

    if($correct) {
        $progress++;
        echo "<Script>this.document.querySelectorAll('nav ul li')[1].classList.add('done');</Script>";        
    }
?>