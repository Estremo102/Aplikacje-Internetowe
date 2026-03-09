<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $tablica = [32, 25, 21, 22, 28, 37, 35, 33];
    
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie2.php';
    $output = ob_get_clean();
    
    $output_normalized = str_replace(["\n", " "], "", $output);
    
    if ($output_normalized === "2137") {
        $poprawne = true;
        $komunikaty[] = "✓ Zadanie wykonane poprawnie";
    } else {
        $komunikaty[] = "✗ Wynik niepoprawny. Oczekiwane: 2137";
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