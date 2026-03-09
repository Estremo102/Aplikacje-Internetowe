<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie6.php';
    $output = ob_get_clean();
    
    if (strpos($output, "Każdy człowiek jest pazerny i to jest to, a może się uda.") !== false || 
        strpos($output, "Ten kibel jest twój i mój!") !== false) {
        $poprawne = true;
        $komunikaty[] = "✓ Zadanie wykonane poprawnie";
    } else {
        $komunikaty[] = "✗ Wynik niepoprawny";
        if (!empty($output)) {
            $komunikaty[] = "Otrzymano: " . trim($output);
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