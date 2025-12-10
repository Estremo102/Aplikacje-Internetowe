<?php
    $dbname = null;
    include __DIR__.'/../zadanie4.php';
    if(!isset($dbname)) {
        echo 'zmienna $dbname nie istnieje';
    } else {
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Poprawnie utworzono bazę danych $dbname" . "<Script>this.document.querySelectorAll('nav ul li')[3].classList.add('done');</Script>";
            $progress++;
        } catch(PDOException $e) {
            echo "Błąd połączenia: " . $e->getMessage();
        }
    }
?>