<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $a = 5;
    $b = 5.34;
    $c = "25 km";
    $d = "km 25";
    $e = "hello";
    $f = true;
    $g = NULL;

    $a = (float) $a;
    $b = (float) $b;
    $c = (float) $c;
    $d = (float) $d;
    $e = (float) $e;
    $f = (float) $f;
    $g = (float) $g;
    
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie3.php';
    $output = ob_get_clean();
    
    $output_normalized = str_replace(["\n", "\r"], " ", $output);
    $output_normalized = trim(preg_replace('/\s+/', ' ', $output_normalized));
    
    if ($output_normalized === "float(5) float(5.34) float(25) float(0) float(0) float(1) float(0)") {
        $poprawne = true;
        $komunikaty[] = "✓ Zadanie wykonane poprawnie";
    } else {
        $komunikaty[] = "✗ Wynik niepoprawny";
        $komunikaty[] = "Oczekiwane: float(5) float(5.34) float(25) float(0) float(0) float(1) float(0)";
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>