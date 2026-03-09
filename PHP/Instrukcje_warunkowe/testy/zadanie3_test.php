<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $a = rand(0,80);
    $b = rand(10,90);
    $c = rand(20,100);
    
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie3.php';
    $output = ob_get_clean();
    
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