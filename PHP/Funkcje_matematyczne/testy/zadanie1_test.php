<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie1.php';
    $output = ob_get_clean();
    
    if (strpos($output, "pole koła o promieniu 5 wynosi 78.539816339745") !== false) {
        $poprawne = true;
        $komunikaty[] = "✓ Zadanie wykonane poprawnie";
    } else {
        $komunikaty[] = "✗ Wynik niepoprawny. Oczekiwane: pole koła o promieniu 5 wynosi 78.539816339745";
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