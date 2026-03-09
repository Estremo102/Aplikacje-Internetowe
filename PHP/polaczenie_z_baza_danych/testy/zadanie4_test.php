<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $dbname = null;
    
    ob_start();
    include __DIR__ . '/../zadanie4.php';
    ob_get_clean();
    
    if (!isset($dbname)) {
        $komunikaty[] = "✗ Zmienna \$dbname nie istnieje";
    } else {
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $poprawne = true;
            $komunikaty[] = "✓ Poprawnie utworzono bazę danych $dbname";
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