<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie1.php';
    ob_get_clean();
    
    if (!isset($conn)) {
        $komunikaty[] = "✗ Nie nawiązano połączenia";
    } else if ($conn->errorCode() == '00000') {
        $poprawne = true;
        $komunikaty[] = "✓ Połączenie poprawne";
    } else {
        $komunikaty[] = "✗ Błąd połączenia: " . implode(", ", $conn->errorInfo());
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>