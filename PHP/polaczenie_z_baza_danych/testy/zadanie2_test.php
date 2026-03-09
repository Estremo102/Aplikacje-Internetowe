<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        ob_start();
        include __DIR__ . '/../zadanie2.php';
        ob_get_clean();
        
        if (!isset($conn)) {
            $komunikaty[] = "✗ Nie nawiązano połączenia, upewnij się, że używasz zmiennej $conn";
        } else if ($conn->errorCode() == '00000') {
            $poprawne = true;
            $komunikaty[] = "✓ Połączenie poprawne";
        } else {
            $komunikaty[] = "✗ Błąd połączenia: " . implode(", ", $conn->errorInfo());
        }
        
        $conn = null;
    } catch(PDOException $e) {
        $komunikaty[] = "✗ Błąd: " . $e->getMessage();
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>