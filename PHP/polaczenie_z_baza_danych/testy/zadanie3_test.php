<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $conn = new PDO("mysql:host=localhost;dbname=mysql", 'root', '');
    
    ob_start();
    include __DIR__ . '/../zadanie3.php';
    ob_get_clean();
    
    if ($conn !== null) {
        $komunikaty[] = "✗ Nie zamknięto połączenia z bazą danych";
    } else {
        $poprawne = true;
        $komunikaty[] = "✓ Zamknięto połączenie z bazą danych";
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>