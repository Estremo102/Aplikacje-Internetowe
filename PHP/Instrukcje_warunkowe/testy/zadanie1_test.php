<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $A1 = rand(0, 100);
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie1.php';
    $output = ob_get_clean();
    
    // Podstawowe sprawdzenie - jeśli nie ma błędu
    $poprawne = true;
    $komunikaty[] = "✓ Zadanie wykonane";
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>