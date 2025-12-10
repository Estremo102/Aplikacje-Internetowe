<?php
    $correct = true;
    $dbname = null;
    
    include __DIR__.'/../zadanie4.php';
    
    if(!isset($dbname)) {
        $correct = false;
        echo 'Najpierw wykonaj zadanie 4 (baza danych musi być utworzona)';
    } else {
        include __DIR__.'/../zadanie6.php';
        
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "SELECT COUNT(*) as count FROM User";
            $result = $conn->query($sql);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $rowCount = $row['count'];
            
            if($rowCount == 0) {
                $correct = false;
                echo 'Brak danych w tabeli User';
            } else {
                $sql = "SELECT * FROM User LIMIT 1";
                $result = $conn->query($sql);
                $firstRow = $result->fetch(PDO::FETCH_ASSOC);
                
                if(empty($firstRow['login']) && empty($firstRow['age'])) {
                    $correct = false;
                    echo 'Dane w tabeli User są puste';
                } else {
                    echo "Dane zostały dodane do tabeli User pomyślnie ($rowCount rekordów)";
                }
            }
            
            $conn = null;
        } catch(PDOException $e) {
            $correct = false;
            echo "Błąd połączenia: " . $e->getMessage();
        }
    }

    if($correct) {
        $progress++;
        echo "<Script>this.document.querySelectorAll('nav ul li')[5].classList.add('done');</Script>";
    }
?>