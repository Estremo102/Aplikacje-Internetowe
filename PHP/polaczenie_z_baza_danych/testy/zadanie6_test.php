<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];
$dbname_global = null;

try {
    if(!isset($dbname_global)) {
        $komunikaty[] = "✗ Najpierw wykonaj zadanie 4";
    } else {
        ob_start();
        include __DIR__ . '/../zadanie6.php';
        ob_get_clean();
        
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname_global", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "SELECT COUNT(*) as count FROM User";
            $result = $conn->query($sql);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $rowCount = $row['count'];
            
            if($rowCount == 0) {
                $komunikaty[] = "✗ Brak danych w tabeli User";
            } else {
                $sql = "SELECT * FROM User LIMIT 1";
                $result = $conn->query($sql);
                $firstRow = $result->fetch(PDO::FETCH_ASSOC);
                
                if(empty($firstRow['login']) && empty($firstRow['age'])) {
                    $komunikaty[] = "✗ Dane w tabeli User są puste";
                } else {
                    $poprawne = true;
                    $komunikaty[] = "✓ Dane zostały dodane do tabeli User pomyślnie ($rowCount rekordów)";
                }
            }
            
            $conn = null;
        } catch(PDOException $e) {
            $komunikaty[] = "✗ Błąd połączenia: " . $e->getMessage();
        }
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>
    
    echo "<Script>this.document.querySelector('.navbox nav progress').value = \"$progress\";</script>";
?>