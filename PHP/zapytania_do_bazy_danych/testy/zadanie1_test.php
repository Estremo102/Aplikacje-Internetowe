 <?php
    echo '<script>let progress = [0, 0, 0, 0, 0, 0];</script>';
    include __DIR__ . '/../rozwiazania/zadanie1.php';
    correct = true;
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
    if($correct)
    {

        echo "<Script>progress[0] = 1;</Script>"; 
    }
?> 