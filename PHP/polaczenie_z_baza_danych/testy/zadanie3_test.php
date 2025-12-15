<?php
    $correct = true;
    $conn = new PDO("mysql:host=localhost;dbname=mysql", 'root', '');
    include __DIR__.'/../zadanie3.php';
    if($conn !== null) {
        $correct = false;
        echo 'Nie zamknięto połączenia z bazą danych;';
    }
    if ($correct) {
        $progress++;
        echo 'Zamknięto połaczenie z bazą danych' . "<Script>this.document.querySelectorAll('nav ul li')[2].classList.add('done');</Script>";
    }
    $conn = null;
?>