<?php
    $correct = true;
    $dbname = null;
    
    if(!isset($dbname)) {
        $correct = false;
        echo 'Najpierw wykonaj zadanie 4 (baza danych musi być utworzona)';
    } else {
        include __DIR__.'/../zadanie5.php';
        
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "SHOW TABLES LIKE 'User'";
            $result = $conn->query($sql);
            $tableExists = $result->rowCount() > 0;
            
            if(!$tableExists) {
                $correct = false;
                echo 'Tabela User nie została utworzona';
            } else {
                $sql = "DESCRIBE User";
                $result = $conn->query($sql);
                $columns = $result->fetchAll(PDO::FETCH_COLUMN, 0);
                
                if(!in_array('ID', $columns) || !in_array('login', $columns) || !in_array('age', $columns)) {
                    $correct = false;
                    echo 'Tabela User nie ma wymaganych kolumn (ID, login, age)';
                } else {
                    echo 'Tabela User została utworzona poprawnie';
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
        echo "<Script>this.document.querySelectorAll('nav ul li')[4].classList.add('done');</Script>";
    }
?>