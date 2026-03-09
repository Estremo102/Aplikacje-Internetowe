<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $aa = 5;
    $bb = 5.34;
    $cc = 0;
    $dd = -1;
    $ee = 0.1;
    $ff = "hello";
    $gg = "";
    $hh = true;
    $ii = NULL;
    
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie4.php';
    $output = ob_get_clean();
    
    $output_normalized = str_replace(["\n", "\r"], " ", $output);
    $output_normalized = trim(preg_replace('/\s+/', ' ', $output_normalized));
    
    if ($output_normalized === "bool(true) bool(true) bool(false) bool(true) bool(true) bool(true) bool(false) bool(true) bool(false)") {
        $poprawne = true;
        $komunikaty[] = "✓ Zadanie wykonane poprawnie";
    } else {
        $komunikaty[] = "✗ Wynik niepoprawny";
        $komunikaty[] = "Oczekiwane: bool(true) bool(true) bool(false) bool(true) bool(true) bool(true) bool(false) bool(true) bool(false)";
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>